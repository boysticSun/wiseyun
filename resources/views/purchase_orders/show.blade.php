@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>PurchaseOrder / Show #{{ $purchase_order->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('purchase_orders.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('purchase_orders.edit', $purchase_order->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Order_sn</label>
<p>
	{{ $purchase_order->order_sn }}
</p> <label>User_id</label>
<p>
	{{ $purchase_order->user_id }}
</p> <label>Purchase_id</label>
<p>
	{{ $purchase_order->purchase_id }}
</p> <label>Quoted_price</label>
<p>
	{{ $purchase_order->quoted_price }}
</p> <label>Quoted_price_info</label>
<p>
	{{ $purchase_order->quoted_price_info }}
</p> <label>Order_status</label>
<p>
	{{ $purchase_order->order_status }}
</p> <label>Pay_status</label>
<p>
	{{ $purchase_order->pay_status }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
