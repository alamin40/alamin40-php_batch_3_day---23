<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct(){
        return [
            0 => [
                'id'        => 1,
              'name'        =>  'White T-Shirt',
              'price'       =>  '2850',
              'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
              'image'       =>  asset('/img/s1.png'),
            ],
            1 => [
                'id'          => 2,
                'name'        =>  'Blue T-Shirt',
                'price'       =>  '2850',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s2.png'),
            ],
            2 => [
                'id'          => 3,
                'name'        =>  'Black T-Shirt',
                'price'       =>  '2850',
                'description' =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi esse quas? Beatae, qui, quibusdam.',
                'image'       =>  asset('/img/s3.png'),
            ],
        ];
    }
}
