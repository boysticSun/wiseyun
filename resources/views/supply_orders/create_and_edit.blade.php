@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1 mt-5">
    @if (Auth::user()->id == $supply->user->id)
    <div class="flash-message mt-4">
      <p class="alert alert-warning">
        <i class="fa-solid fa-circle-exclamation"></i> 不可购买自己发布的供应信息
      </p>
    </div>
    @else
    <div class="card order-card">

      <div class="card-header bg-white pt-4">
        <h4>
          @if($supply_order->id)
            修改订单
          @else
            提交订单
          @endif
        </h4>
      </div>

      <div class="card-body pb-5">
        @if($supply_order->id)
          <form action="{{ route('supply_orders.update', $supply_order->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('supply_orders.store') }}" method="POST" accept-charset="UTF-8">
            <input type="hidden" name="supply_id" value="{{ $supply->id }}">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="mb-3">
              <label for="supply_id-field" class="mb-2">供应信息</label>
              <div class="row m-0">
                <div class="col-md-4 ps-0">
                  @if($supply->thumb)
                  <img class="mt-3 mb-3" src="{{ $supply->thumb }}" style="max-width: 100%">
                  @else
                  <i class="fa-regular fa-image" style="font-size: 200px;"></i>
                  @endif
                </div>
                <div class="col-md-8 pt-3">
                  <div><h5>{{ $supply->title }}</h5></div>
                  <div class="mt-3">
                    价格：
                    @if ($supply->is_negotiable == 1)
                    <span>面议</span>
                    @else
                    <span>{{ $supply->price }}</span> / <span>{{ $supply->price_unit }}</span>
                    @endif
                  </div>
                  <div class="mt-3">
                    {{ $supply->excerpt }}
                  </div>
                </div>
              </div>
          </div>
          @if ($supply->is_negotiable == 0)
          <div class="mb-3">
            <label for="num-field" class="mb-2">购买数</label>
            <div class="input-group spinner">
              <input type="text" class="form-control" value="1" readonly>
              <div class="input-group-btn-vertical px-3">
                <button class="btn btn-default border" type="button"><i class="fa fa-caret-up"></i></button>
                <button class="btn btn-default border" type="button"><i class="fa fa-caret-down"></i></button>
              </div>
              <div class="input-group-btn-vertical pt-2 px-5 border">
                <div>{{ $supply->price_unit }}</div>
              </div>
            </div>
          </div>
          @endif
          <div class="mb-3">
              <label for="total_price-field" class="mb-2">订单总金额</label>
              @if ($supply->is_negotiable == 1)
              <input class="form-control" type="text" name="total_price" id="total_price-field" value="{{ old('total_price', $supply_order->total_price ) }}" placeholder="请输入面议时议定的订单总金额" />
              @else
              @if($supply_order->id)
              <input class="form-control" type="text" name="total_price" id="total_price-field" value="{{ old('total_price', $supply_order->total_price ) }}" readonly />
              @else
              <input class="form-control" type="text" name="total_price" id="total_price-field" value="{{ $supply->price }}" readonly />
              @endif
              @endif
          </div>
          <div class="mb-3">
            <label for="remark-field" class="mb-2">订单备注</label>
            <textarea name="remark" id="remark-field" class="form-control" rows="3" placeholder="订单备注/供应商送货或采购方自提/收货地址/采购时长详情等信息">{{ old('remark', $supply_order->remark ) }}</textarea>
          </div>

          <div class="well well-sm">
            @if($supply_order->id)
            <button type="submit" class="btn btn-primary">{{ __('Edit order') }}</button>
            @else
            <button type="submit" class="btn btn-primary">{{ __('Add order') }}</button>
            @endif
            <a class="btn btn-link float-xs-right" href="javascript:history.back(-1)"> <- {{ __('Go back') }}</a>
          </div>
        </form>
      </div>
    </div>
    @endif
  </div>
</div>

@endsection

@section('scripts')
<script>
  $(document).ready(function() {
    $('.spinner .btn:first-of-type').on('click', function() {
      let num = parseInt($('.spinner input').val(), 10) + 1;
      $('.spinner input').val(num);
      $('#total_price-field').val((num*{{ $supply->price }}).toFixed(2));
    });
    $('.spinner .btn:last-of-type').on('click', function() {
      let num = parseInt($('.spinner input').val(), 10) - 1;
      if(num > 0)
      {
        $('.spinner input').val(num);
        $('#total_price-field').val((num*{{ $supply->price }}).toFixed(2));
      }
    });
  })
</script>
@stop
