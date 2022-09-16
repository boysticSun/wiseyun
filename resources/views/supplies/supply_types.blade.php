@extends('layouts.app')
@section('title', '供应产品列表')

@section('banner')
  <div class="market-top-banner" style="background: url('/images/market-top-banner.png');">
    <div class="container">
      <div class="supply-banner-top">
        <h5>帮助企业实现有效需求的高效对接</h5>
        <h1>精准供需，就找智慧wise</h1>
      </div>
      <div class="supply-banner-bottom">
        <div class="row">
          <div class="col-md-9">
            <div class="search">
              <form method="POST" action="{{ route('market_search') }}">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input id="keyword" type="keyword" class="form-control @error('keyword') is-invalid @enderror" name="keyword" value="{{ old('keyword') }}" required autocomplete="keyword" autofocus placeholder="{{ __('Please Enter A Market Keyword') }}">
                <button type="submit" class="btn btn-primary"></button>
              </form>
            </div>
            <div class="supply-publish">
              <a href="#">
                <img src="/images/supply-publish.png">
              </a>
            </div>

          </div>
          <div class="col-md-3">
            <div class="supply-search-right">
              <img src="/images/market-tp-supplier.png">
              <div>
                100<span>家供应商</span>
              </div>
            </div>
            <div class="supply-search-right">
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
  <div class="goods-type-row mt-5 bg-white">
    <div class="goods-type-box">
      <div class="goods-types">{{ __('Industry Class') }}</div>
      <div class="goods-types">
        <a href="{{ route('goodstypes.allsupplytypes') }}" class="@if($isall == 1) active @endif">{{ __('All') }}</a>
      </div>
      @foreach($goodstypes as $type)
      <div class="goods-types">
        <a href="{{ route('goodstypes.supplytypes', $type->id) }}" class="{{ $type->active }}">{{ $type->name }}</a>
      </div>
      @endforeach
    </div>
  </div>
  <div class="supply-list mt-5">
    <div class="supply-list-box">
      @foreach ($supplies as $list)
        <div class="supplies-item">
          <a class="supplies-item-img" href="{{ route('supplies.show', $list->id) }}">
            <img src="@if(empty($list->thumb)) /images/mdefault.png @else {{ $list->thumb }} @endif">
          </a>
          <div class="title">{{ $list->title }}</div>
          <div class="excerpt">{{ $list->excerpt }}</div>
          <div class="price">
            {{ $list->price }}/{{ $list->price_unit }}
          </div>
          <a class="buy-btn" href="{{ route('supplies.show', $list->id) }}">{{ __('Buy Now') }}</a>
        </div>
      @endforeach
    </div>
    {{-- 分页 --}}
    <div class="mt-5">
      {!! $supplies->appends(Request::except('page'))->render() !!}
    </div>
  </div>
@stop
