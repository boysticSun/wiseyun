@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1 mt-5">
    <div class="card order-card">
      <div class="card-header bg-white pt-4">
        <h4>订单详情</h4>
      </div>

      <div class="card-body">
        <div class="card-block">
          <div class="row">
            <div class="col-md-6">
              <a class="btn btn-link text-decoration-none" href="javascript:history.back(-1);"><i class="fa-solid fa-caret-left"></i> {{ __('Go back') }}</a>
            </div>
            <div class="col-md-6">
              @if (Auth::user()->id == $supply_order->user_id && $supply_order->order_status == 0)
              <a class="btn btn-sm btn-outline-warning float-right mt-1" href="{{ route('supply_orders.edit', $supply_order->id) }}">
                {{ __('Edit') }}
              </a>
              @endif
            </div>
          </div>
        </div>
        <br>

        <p class="border-bottom py-2">
          <div class="row m-0">
            <div class="col-md-6 ps-0">
              订单号：{{ $supply_order->order_sn }}
            </div>
            <div class="col-md-6 pe-0">
              下单时间：{{ $supply_order->created_at->toDateTimeString() }}
            </div>
          </div>
        </p>
        <label>产品信息：</label>
        <div class="row m-0 border-bottom">
          <div class="col-md-4 ps-0">
            @if($supply_order->supply->thumb)
            <img class="mt-3 mb-3" src="{{ $supply_order->supply->thumb }}" style="max-width: 100%">
            @else
            <i class="fa-regular fa-image" style="font-size: 200px;"></i>
            @endif
          </div>
          <div class="col-md-8 pt-3">
            <div><h5>{{ $supply_order->supply->title }}</h5></div>
            <div class="mt-3">
              价格：
              @if ($supply_order->supply->is_negotiable == 1)
              <span>面议</span>
              @else
              <span>{{ $supply_order->supply->price }}</span> / <span>{{ $supply_order->supply->price_unit }}</span>
              @endif
            </div>
            <div class="mt-3">
              {{ $supply_order->supply->excerpt }}
            </div>
          </div>
        </div>
        <p class="mt-3">
          订单总金额：{{ $supply_order->total_price }}
        </p>
        <label>订单备注：</label>
        <p class="mt-3">
          {{ $supply_order->remark }}
        </p>
        <form action="{{ route('supply_orders.update', $supply_order->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <p>
            订单状态：{{ $order_status[$supply_order->order_status] }}
            @if( $supply_order->order_status == 0 && Auth::user()->id == $supply_order->supply->user->id)
              <input type="hidden" name="order_status" value="1">
              <button type="submit" class="btn btn-sm btn-outline-warning ms-2" onclick="return confirm('确认接单吗？');">
                确认订单
              </button>
            @endif
          </p>
          <p>
            支付状态：{{ $pay_status[$supply_order->pay_status] }}
            @if($supply_order->order_status == 1 && $supply_order->pay_status == 0 && Auth::user()->id == $supply_order->user_id)
              <a class="btn btn-sm btn-outline-warning ms-2" href="{{ route('supply_orders.pay', $supply_order->id) }}">
                去支付
              </a>
            @endif
          </p>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
