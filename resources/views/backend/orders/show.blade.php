@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
    <h2>Order Detail (Your UI)</h2>

    <div class="row">
      <div class='col-md-4 mt-4 pt-2 animated in-left'>
        <p>Voucherno: {{$order->voucherno}}</p>
        <p>Order Date: {{$order->orderdate}}</p>
        <p>Customer: {{$order->user->name}}</p>

        <a href="#" class="btn btn-success mr-2">Confirm</a>

        <a href="#" class="btn btn-primary">Print Out</a>
      </div>

      <div class='col-md-8  pt-2 mt-4 animated in-right'>
        <table class="table table bordered">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Item Name</th>
              <th>Perprice</th>
              <th>Quantity</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            @php $i=1; $total = 0; @endphp
            @foreach($order->items as $item)
            @php 
              $subtotal = $item->price*$item->pivot->qty;
              $total += $subtotal;
            @endphp
              <tr>
                <td>{{$i++}}</td>
                <td>{{$item->name}}</td>
                <td>{{number_format($item->price)}} MMK</td>
                <td>{{number_format($item->pivot->qty)}}</td>
                <td>{{number_format($subtotal)}}</td>
              </tr>
            @endforeach

              <tr class="bg-secondary text-white">
                <td colspan="4" class="text-center">Total</td>
                <td>{{number_format($total)}} MMK</td>
              </tr>
          </tbody>
        </table>
        {{-- <p class='text-center'><a class='btn btn-primary px-2 add_to_cart hvr-icon-buzz-out' href='#' role='button' data-id='$id' data-name='$product_name' data-price='$product_price' data-photo='$product_photo'>Add to Cart  <i class='fa fa-shopping-cart hvr-icon' aria-hidden='true'></i></a></p> --}}
      </div>
    </div>
  </div>
@endsection