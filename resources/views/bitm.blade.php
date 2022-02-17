@extends('master')
@section('title')
    BITM
@endsection

@section('body')
    <section class="container">
        <h1>{{ $a .' '. $alamin }}</h1>
        <h1>{{$alamin }}</h1>

{{--        @foreach($joy as $key => $v)--}}
{{--            @if( $key >= 3 && $key<= 5)--}}
{{--            <h1>Index No: {{$key}} and Value : {{$v}}</h1>--}}

{{--            @else--}}
{{--                <h3>Out of range.</h3>--}}
{{--            @endif--}}
{{--        @endforeach--}}
        @foreach($joy as $key => $value)
            @foreach($value as $item)
                <span> {{$item}}</span><br/>
            @endforeach
        @endforeach
    </section>
@endsection
