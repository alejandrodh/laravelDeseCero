@extends('layouts.app')

@section('content')

 <h1>Cart Detail</h1>
    <ul>
      @forelse ($cart as $items)
        <img src="/storage/product/{{$items->featured_img}}" alt="">
        <li>Id: {{$items->id}} <br> 
          Nombre: {{$items->name}} <br>
        Descripción: {{$items->description}} <br>
        Precio: {{$items->price}}</li>
        <form class="" action="/cart/{{$items->id}}" method="post">
          @csrf
          <button type="submit">Quitar del carrito</button>
        </form>

      @empty
          <p>Su carrito está vacío</p>
      @endforelse

      @if ($cart->isNotEmpty())
        <a href="/cart/close">Comprar</a>
      @endif

    </ul>
@endsection
