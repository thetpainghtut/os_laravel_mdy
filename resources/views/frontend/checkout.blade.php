@extends('frontendtemplate')

@section('content')
  <div class="col-lg-9 my-3">
    <h2 class="text-center">Your Cart!</h2>
    <table class="table table-bordered my-3">
      <thead>
        <tr>
          <th>No</th>
          <th>Photo</th>
          <th>Name</th>
          <th>Price</th>
          <th>Qty</th>
          <th>Total</th>

        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>

    <a href="{{route('homepage')}}" class="btn btn-success">Continue Shopping</a>

    <textarea class="notes" placeholder="Your Note Here!"></textarea>
    @role('customer')
      <a href="#" class="btn btn-info float-right buy_now">Checkout</a>
    @else
      <a href="{{route('login')}}" class="btn btn-info float-right">Login To Checkout</a>
    @endrole
  </div>
@endsection

@section('script')
  <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection