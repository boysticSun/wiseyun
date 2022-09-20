@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          PurchaseOrder /
          @if($purchase_order->id)
            Edit #{{ $purchase_order->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($purchase_order->id)
          <form action="{{ route('purchase_orders.update', $purchase_order->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('purchase_orders.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="mb-3">
                	<label for="order_sn-field">Order_sn</label>
                	<input class="form-control" type="text" name="order_sn" id="order_sn-field" value="{{ old('order_sn', $purchase_order->order_sn ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $purchase_order->user_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="purchase_id-field">Purchase_id</label>
                    <input class="form-control" type="text" name="purchase_id" id="purchase_id-field" value="{{ old('purchase_id', $purchase_order->purchase_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="quoted_price-field">Quoted_price</label>
                    <input class="form-control" type="text" name="quoted_price" id="quoted_price-field" value="{{ old('quoted_price', $purchase_order->quoted_price ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="quoted_price_info-field">Quoted_price_info</label>
                	<textarea name="quoted_price_info" id="quoted_price_info-field" class="form-control" rows="3">{{ old('quoted_price_info', $purchase_order->quoted_price_info ) }}</textarea>
                </div> 
                <div class="mb-3">
                    <label for="order_status-field">Order_status</label>
                    <input class="form-control" type="text" name="order_status" id="order_status-field" value="{{ old('order_status', $purchase_order->order_status ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="pay_status-field">Pay_status</label>
                    <input class="form-control" type="text" name="pay_status" id="pay_status-field" value="{{ old('pay_status', $purchase_order->pay_status ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('purchase_orders.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
