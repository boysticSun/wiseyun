@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          SupplyOrder /
          @if($supply_order->id)
            Edit #{{ $supply_order->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($supply_order->id)
          <form action="{{ route('supply_orders.update', $supply_order->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('supply_orders.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="mb-3">
                	<label for="order_sn-field">Order_sn</label>
                	<input class="form-control" type="text" name="order_sn" id="order_sn-field" value="{{ old('order_sn', $supply_order->order_sn ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $supply_order->user_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="supply_id-field">Supply_id</label>
                    <input class="form-control" type="text" name="supply_id" id="supply_id-field" value="{{ old('supply_id', $supply_order->supply_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="total_price-field">Total_price</label>
                    <input class="form-control" type="text" name="total_price" id="total_price-field" value="{{ old('total_price', $supply_order->total_price ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="remark-field">Remark</label>
                	<textarea name="remark" id="remark-field" class="form-control" rows="3">{{ old('remark', $supply_order->remark ) }}</textarea>
                </div> 
                <div class="mb-3">
                    <label for="order_status-field">Order_status</label>
                    <input class="form-control" type="text" name="order_status" id="order_status-field" value="{{ old('order_status', $supply_order->order_status ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="pay_status-field">Pay_status</label>
                    <input class="form-control" type="text" name="pay_status" id="pay_status-field" value="{{ old('pay_status', $supply_order->pay_status ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('supply_orders.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
