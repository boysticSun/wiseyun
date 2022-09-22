@extends('layouts.app')

@section('title', '采购订单')

@section('content')
  <div class="container">
    <div class="col-md-10 offset-md-1 mt-5">
      <div class="card order-card">
        <div class="card-header bg-white pt-4">
          <h4>采购订单</h4>
        </div>
        <div class="card-body">
          @if (count($orders))

          <ul class="list-group mt-4 border-0">
            @foreach ($orders as $list)
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
                    <i class="far fa-edit"></i> 操作
                  </a>
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
          {!! $orders->render() !!}
        </div>
        </div>
      </div>
    </div>
  </div>
@stop
