@extends('backendtemplate')

@section('content')
  <div class="container-fluid">
    <h2 class="d-inline-block">Order List (Table)</h2>
    
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Voucherno</th>
          <th>Order Date</th>
          <th>Total</th>
          <th>Customer</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @php $i=1; @endphp
        @foreach($orders as $order)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$order->voucherno}}</td>
            <td>{{$order->orderdate}}</td>
            <td>{{$order->total}} MMK</td>
            <td>{{$order->user->name}}</td>
            <td>
              <a href="{{route('orders.show',$order->id)}}" class="btn btn-warning">Detail</a>

              <form method="post" action="{{route('orders.destroy',$order->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                @csrf
                @method('DELETE')
                <input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
              </form> 
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection

@section('script')
  <script type="text/javascript">
    $(document).ready(function () {
      
    })
  </script>
@endsection