@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
    <h2>Item Detail (Your UI)</h2>

    <div class="row">
      <div class='col-md-4 mt-2 pt-2 animated in-left'>
        <p><img src="{{ asset($item->photo)}}" class='img-fluid'></p>
      </div>

      <div class='col-md-8  pt-2 mt-4 animated in-right'>
        <table class="table table bordered">
          <tbody>
            <tr><td>Product Name:<td>{{$item->name}}</td></tr>
            <tr><td>Product Code:<td>{{$item->codeno}}</td></tr>
            <tr><td>Product Price:<td>{{$item->price}} MMK</td></tr>
            <tr><td>Description:<td>{{$item->description}}</td></tr>
            <tr><td>Brand:<td>{{$item->brand->name}}</td></tr>
            <tr><td>Subcategory:<td>{{$item->subcategory->name}}</td></tr>
          </tbody>
        </table>
        {{-- <p class='text-center'><a class='btn btn-primary px-2 add_to_cart hvr-icon-buzz-out' href='#' role='button' data-id='$id' data-name='$product_name' data-price='$product_price' data-photo='$product_photo'>Add to Cart  <i class='fa fa-shopping-cart hvr-icon' aria-hidden='true'></i></a></p> --}}
      </div>
    </div>
  </div>
@endsection