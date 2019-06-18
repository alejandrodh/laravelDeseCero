@extends('layouts.app')

@section('content')
    <h1>Lista de productos</h1>
    @foreach ($products as $product)
      <article class="">
        <h2>{{$product->name}}</h2>
        <p>{{$product->description}}</p>
        <p>{{$product->price}}</p>
        <a href="/product/{{$product->id}}">Ver más</a>
        <p><img src="/storage/product/{{$product->featured_img}}" alt=""></p>

      </article>
    @endforeach
@endsection
