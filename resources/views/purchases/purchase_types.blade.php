@extends('layouts.app')
@section('title', '采购产品列表')

@section('banner')
  <div class="market-top-banner" style="background: url('/images/market-top-banner.png');">
    <div class="container">
      <div class="purchase-banner-top">
        <h5>帮助企业实现有效需求的高效对接</h5>
        <h1>精准供需，就找智慧wise</h1>
      </div>
      <div class="purchase-banner-bottom">
        <div class="row">
          <div class="col-md-9">
            <div class="search">
              <form method="POST" action="{{ route('market_search') }}">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input id="keyword" type="keyword" class="form-control @error('keyword') is-invalid @enderror" name="keyword" value="{{ old('keyword') }}" required autocomplete="keyword" autofocus placeholder="{{ __('Please Enter A Market Keyword') }}">
                <button type="submit" class="btn btn-primary"></button>
              </form>
            </div>
            <div class="purchase-publish">
              <a href="#">
                <img src="/images/purchase-publish.png">
              </a>
            </div>
            <div class="goods-type-box">
              <div class="goods-types">行业分类</div>
              <div class="goods-types">
                <a href="{{ route('goodstypes.allpurchasetypes') }}" class="@if($isall == 1) active @endif">全部</a>
              </div>
              @foreach($goodstypes as $type)
              <div class="goods-types">
                <a href="{{ route('goodstypes.purchasetypes', $type->id) }}" class="{{ $type->active }}">{{ $type->name }}</a>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-md-3">
            <div class="purchase-search-right">
              <img src="/images/market-tp-supplier.png">
              <div>
                100<span>家供应商</span>
              </div>
            </div>
            <div class="purchase-search-right">
              <img src="/images/market-tp-product.png">
              <div>
                100<span>个产品</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('content')
  <div class="purchases-list mt-5">
    <div class="purchases-list-box">
      @foreach ($purchases as $list)
        <div class="purchases-item">
          <a class="name" href="{{ route('purchases.show', $list->id) }}">{{ $list->title }}</a>
          <div class="box">
            <div class="row date">
              <div class="col-md-6 date-left">
                <div class="date-title">发布日期</div>
                <div class="date-data">{{ $list->created_at->toDateString() }}</div>
              </div>
              <div class="col-md-6">
                <div class="date-title">截止日期</div>
                <div class="date-data">@if($list->is_indefinitely == 1) 长期有效 @else {{ $list->validity->toDateString() }} @endif</div>
              </div>
            </div>
            <div class="time">
              <div class="time-title">距离结束</div>
              <div class="time-progress row">
                <div class="progress col-md-7">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="col-md-1 p-0">&nbsp;</div>
                <div class="time-word col-md-4">@if($list->is_indefinitely == 1) 长期有效 @else {{ $list->validity->toDateString() }} @endif</div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {{-- 分页 --}}
    <div class="mt-5">
      {!! $purchases->appends(Request::except('page'))->render() !!}
    </div>
  </div>
@stop
