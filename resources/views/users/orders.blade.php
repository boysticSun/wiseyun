@extends('layouts.app')

@section('title', '我的订单')

@section('content')
  <div class="container">
    <div class="col-md-10 offset-md-1 mt-5">
      <div class="card order-card">
        <div class="card-header bg-white pt-4">
          <h4>我的订单</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active bg-transparent text-dark" data-bs-toggle="pill" data-bs-target="#purchase" href="javascript:;">我的报名</a></li>
            <li class="nav-item"><a class="nav-link bg-transparent text-dark" data-bs-toggle="pill" data-bs-target="#supply" href="javascript:;">我的购买</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="purchase">
              @if (count($purchase_orders))

                <ul class="list-group mt-4 border-0">
                  @foreach ($purchase_orders as $list)
                    <li class="list-group-item pl-2 pr-2 border-start-0 border-end-0 @if($loop->first) border-top-0 @endif">
                      <a class="text-decoration-none text-dark" href="{{ route('purchase_orders.show', $list->id) }}">
                        订单号：{{ $list->order_sn }}
                      </a>
                      ▪
                      <span class="meta float-right text-secondary">
                        {{-- {{ $list->reply_count }} 回复
                        <span> ⋅ </span> --}}
                        下单时间：{{ $list->created_at->toDateTimeString() }}
                      </span>
                      @if (Auth::user()->id == $user->id)
                      <div class="float-end">
                        <a href="{{ route('purchase_orders.edit', $list->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
                          <i class="far fa-edit"></i> 编辑
                        </a>
                        @if ($list->pay_status == 0)
                        <form action="{{ route('purchase_orders.destroy', $list->id) }}" method="post"
                          style="display: inline-block;"
                          onsubmit="return confirm('您确定要删除吗？');">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-trash-alt"></i> 删除
                          </button>
                        </form>
                        @else
                        <button type="submit" class="btn btn-outline-secondary btn-sm" aria-readonly="true" onclick="return confirm('已支付订单不可删除');">
                          <i class="far fa-trash-alt"></i> 删除
                        </button>
                        @endif
                      </div>
                      @endif
                    </li>
                  @endforeach
                </ul>

              @else
                <div class="empty-block mt-4">暂无数据 ~_~ </div>
              @endif

              {{-- 分页 --}}
              <div class="mt-4 pt-1">
                {!! $purchase_orders->render() !!}
              </div>
            </div>
            <div class="tab-pane" id="supply">
              @if (count($supply_orders))

                <ul class="list-group mt-4 border-0">
                  @foreach ($supply_orders as $list)
                    <li class="list-group-item pl-2 pr-2 border-start-0 border-end-0 @if($loop->first) border-top-0 @endif">
                      <a class="text-decoration-none text-dark" href="{{ route('supply_orders.show', $list->id) }}">
                        订单号：{{ $list->order_sn }}
                      </a>
                      ▪
                      <span class="meta float-right text-secondary">
                        {{-- {{ $list->reply_count }} 回复
                        <span> ⋅ </span> --}}
                        下单时间：{{ $list->created_at->toDateTimeString() }}
                      </span>
                      @if (Auth::user()->id == $user->id)
                      <div class="float-end">
                        @if ($list->order_status == 0)
                        <a href="{{ route('supply_orders.edit', $list->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
                          <i class="far fa-edit"></i> 编辑
                        </a>
                        @elseif ($list->order_status == 1)
                        <a href="{{ route('supply_orders.pay', $list->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
                          <i class="fa-solid fa-credit-card"></i> 支付
                        </a>
                        @endif
                        @if ($list->pay_status == 0)
                        <form action="{{ route('supply_orders.destroy', $list->id) }}" method="post"
                          style="display: inline-block;"
                          onsubmit="return confirm('您确定要删除吗？');">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-trash-alt"></i> 删除
                          </button>
                        </form>
                        @else
                        <button type="submit" class="btn btn-outline-secondary btn-sm" aria-readonly="true" onclick="return confirm('已支付订单不可删除');">
                          <i class="far fa-trash-alt"></i> 删除
                        </button>
                        @endif
                      </div>
                      <div class="row m-0">
                        <div class="col-md-4 ps-0">
                          @if($list->supply->thumb)
                          <img class="mt-3 mb-3" src="{{ $list->supply->thumb }}" style="max-width: 100%">
                          @else
                          <i class="fa-regular fa-image" style="font-size: 200px;"></i>
                          @endif
                        </div>
                        <div class="col-md-8 pt-3">
                          <div><h5>{{ $list->supply->title }}</h5></div>
                          <div class="mt-3">
                            价格：
                            @if ($list->supply->is_negotiable == 1)
                            <span>面议</span>
                            @else
                            <span>{{ $list->supply->price }}</span> / <span>{{ $list->supply->price_unit }}</span>
                            @endif
                          </div>
                          <div class="mt-3">
                            订单总价：{{ $list->total_price }}
                          </div>
                          <div class="mt-3">
                            {{ $list->supply->excerpt }}
                          </div>
                        </div>
                      </div>
                      @endif
                    </li>
                  @endforeach
                </ul>

              @else
                <div class="empty-block mt-4">暂无数据 ~_~ </div>
              @endif

              {{-- 分页 --}}
              <div class="mt-4 pt-1">
                {!! $supply_orders->render() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
