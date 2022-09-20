@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>PurchaseOrderAction / Show #{{ $purchase_order_action->id }}</h1>
      </div>

      <div class="card-body">
        <div class="card-block bg-light">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link" href="{{ route('purchase_order_actions.index') }}"><- Back</a>
            </div>
            <div class="col-md-6">
              <a class="btn btn-sm btn-warning float-right mt-1" href="{{ route('purchase_order_actions.edit', $purchase_order_action->id) }}">
                Edit
              </a>
            </div>
          </div>
        </div>
        <br>

        <label>Purchase_order_id</label>
<p>
	{{ $purchase_order_action->purchase_order_id }}
</p> <label>Order_sn</label>
<p>
	{{ $purchase_order_action->order_sn }}
</p> <label>User_id</label>
<p>
	{{ $purchase_order_action->user_id }}
</p> <label>Type</label>
<p>
	{{ $purchase_order_action->type }}
</p> <label>Body</label>
<p>
	{{ $purchase_order_action->body }}
</p> <label>Order_status</label>
<p>
	{{ $purchase_order_action->order_status }}
</p> <label>Pay_status</label>
<p>
	{{ $purchase_order_action->pay_status }}
</p>
      </div>
    </div>
  </div>
</div>

@endsection
