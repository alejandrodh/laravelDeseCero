@extends('layouts.app')

@section('content')
    <h1>Historial de compras</h1>
    <ul>
    @forelse ($history as $cart)
      <li>
        {{-- Como todos los items tienen el mismo nro de carrito y la misma fecha de compra, con traer el dato del primer items podemos mostrar todos los datos generales de la compra --}}
        Cart id: {{$cart->first()->cart_number}}. Enviado el: {{$cart->first()->updated_at}}
        <ul>
          {{-- Con este detalle vemos el contenido de cada item --}}
          @foreach ($cart as $item)
            <li>Nombre:{{$item->name}}</li>
          @endforeach

        </ul>
      </li>
    @empty
      <p>Su historial de compra está vacío</p>
    @endforelse
    </ul>
  @endsection
