<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data = [];
    private $products;



    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->city = 'Dhaka';
        $this->mobile = '01751414104';
//      $this->data = [
//            0 => [
//                'name'      =>  'Alamin',
//                'city'      =>  'Dhaka',
//                'mobile'    =>  '01751414104',
//            ],
//            1 => [
//                'name'      =>  'Shawon',
//                'city'      =>  'Khulna',
//                'mobile'    =>  '01751415150',
//            ],
//            2 => [
//                'name'      =>  'Niloy',
//                'city'      =>  'Rangpur',
//                'mobile'    =>  '01751419148',
//            ],
//        ];
        return view('bitm', [
            'a'         => $this->city ,
            'alamin'    => $this->mobile,
            'joy'       => $this->data
        ]);
    }

    public function about()
    {
        $this->products = Product::getAllProduct();
//        return $this->products;

        return view('about', ['products' => $this->products]);
    }
    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {   $this->products = Product::getAllProduct();
    foreach ($this->products as $item)
    {
        if ($item['id'] == $id)
        {
        return view('detail', ['data' => $item]);
        }
    }
    }
}
