@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>SupplyOrder / Show #{{ $supply_order->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('supply_orders.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('supply_orders.edit', $supply_order->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Order_sn</label>
<p>
	{{ $supply_order->order_sn }}
</p> <label>User_id</label>
<p>
	{{ $supply_order->user_id }}
</p> <label>Supply_id</label>
<p>
	{{ $supply_order->supply_id }}
</p> <label>Total_price</label>
<p>
	{{ $supply_order->total_price }}
</p> <label>Remark</label>
<p>
	{{ $supply_order->remark }}
</p> <label>Order_status</label>
<p>
	{{ $supply_order->order_status }}
</p> <label>Pay_status</label>
<p>
	{{ $supply_order->pay_status }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
