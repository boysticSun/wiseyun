@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          SupplyOrder
          <a class="btn btn-success float-xs-right" href="{{ route('supply_orders.create') }}">Create</a>
        </h1>
      </div>

      <div class="card-body">
        @if($supply_orders->count())
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Order_sn</th> <th>User_id</th> <th>Supply_id</th> <th>Total_price</th> <th>Remark</th> <th>Order_status</th> <th>Pay_status</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              @foreach($supply_orders as $supply_order)
              <tr>
                <td class="text-xs-center"><strong>{{$supply_order->id}}</strong></td>

                <td>{{$supply_order->order_sn}}</td> <td>{{$supply_order->user_id}}</td> <td>{{$supply_order->supply_id}}</td> <td>{{$supply_order->total_price}}</td> <td>{{$supply_order->remark}}</td> <td>{{$supply_order->order_status}}</td> <td>{{$supply_order->pay_status}}</td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="{{ route('supply_orders.show', $supply_order->id) }}">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="{{ route('supply_orders.edit', $supply_order->id) }}">
                    E
                  </a>

                  <form action="{{ route('supply_orders.destroy', $supply_order->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $supply_orders->render() !!}
        @else
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        @endif
      </div>
    </div>
  </div>
</div>

@endsection
