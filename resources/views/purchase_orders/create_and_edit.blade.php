@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1 mt-5">
    <div class="card ">

      <div class="card-header">
        <h4>
          @if($purchase_order->id)
            修改订单
          @else
            提交订单
          @endif
        </h4>
      </div>

      <div class="card-body">
        @if($purchase_order->id)
          <form action="{{ route('purchase_orders.update', $purchase_order->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('purchase_orders.store') }}" method="POST" accept-charset="UTF-8">
            <input type="hidden" name="purchase_id" value="{{ $purchase->id }}">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="mb-3">
              <label for="quoted_price-field">总报价</label>
              <input class="form-control" type="text" name="quoted_price" id="quoted_price-field" value="{{ old('quoted_price', $purchase_order->quoted_price ) }}" />
          </div>
          <div class="mb-3">
            <label for="quoted_price_info-field">报价详情描述</label>
            <textarea name="quoted_price_info" id="quoted_price_info-field" class="form-control" rows="3">{{ old('quoted_price_info', $purchase_order->quoted_price_info ) }}</textarea>
          </div>

          <div class="well well-sm">
            @if($purchase_order->id)
            <button type="submit" class="btn btn-primary">{{ __('Edit order') }}</button>
            @else
            <button type="submit" class="btn btn-primary">{{ __('Add order') }}</button>
            @endif
            <a class="btn btn-link float-xs-right" href="javascript:history.back(-1)"> <- {{ __('Go back') }}</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
