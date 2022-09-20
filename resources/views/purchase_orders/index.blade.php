@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          PurchaseOrder
          <a class="btn btn-success float-xs-right" href="{{ route('purchase_orders.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($purchase_orders->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Order_sn</th> <th>User_id</th> <th>Purchase_id</th> <th>Quoted_price</th> <th>Quoted_price_info</th> <th>Order_status</th> <th>Pay_status</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($purchase_orders as $purchase_order)
              <tr>
                <td class="text-xs-center"><strong>{{$purchase_order->id}}</strong></td>

                <td>{{$purchase_order->order_sn}}</td> <td>{{$purchase_order->user_id}}</td> <td>{{$purchase_order->purchase_id}}</td> <td>{{$purchase_order->quoted_price}}</td> <td>{{$purchase_order->quoted_price_info}}</td> <td>{{$purchase_order->order_status}}</td> <td>{{$purchase_order->pay_status}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('purchase_orders.show', $purchase_order->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('purchase_orders.edit', $purchase_order->id) }}">
                    E
                  </a>

                  <form action="{{ route('purchase_orders.destroy', $purchase_order->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $purchase_orders->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
