@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          PurchaseOrderAction /
          @if($purchase_order_action->id)
            Edit #{{ $purchase_order_action->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($purchase_order_action->id)
          <form action="{{ route('purchase_order_actions.update', $purchase_order_action->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('purchase_order_actions.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="mb-3">
                    <label for="purchase_order_id-field">Purchase_order_id</label>
                    <input class="form-control" type="text" name="purchase_order_id" id="purchase_order_id-field" value="{{ old('purchase_order_id', $purchase_order_action->purchase_order_id ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="order_sn-field">Order_sn</label>
                	<input class="form-control" type="text" name="order_sn" id="order_sn-field" value="{{ old('order_sn', $purchase_order_action->order_sn ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $purchase_order_action->user_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="type-field">Type</label>
                    <input class="form-control" type="text" name="type" id="type-field" value="{{ old('type', $purchase_order_action->type ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="body-field">Body</label>
                	<textarea name="body" id="body-field" class="form-control" rows="3">{{ old('body', $purchase_order_action->body ) }}</textarea>
                </div> 
                <div class="mb-3">
                    <label for="order_status-field">Order_status</label>
                    <input class="form-control" type="text" name="order_status" id="order_status-field" value="{{ old('order_status', $purchase_order_action->order_status ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="pay_status-field">Pay_status</label>
                    <input class="form-control" type="text" name="pay_status" id="pay_status-field" value="{{ old('pay_status', $purchase_order_action->pay_status ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('purchase_order_actions.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
