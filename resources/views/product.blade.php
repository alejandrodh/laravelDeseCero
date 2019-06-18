@extends('layouts.app')

@section('content')
    <h1>Detalle del Gato: {{$product->name}}</h1>
      <article class="">
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
        <a href="/product/{{$product->id}}/addtocart">Adoptar</a>
        <img src="/storage/product/{{$product->featured_img}}" alt="">
      </article>
@endsection
