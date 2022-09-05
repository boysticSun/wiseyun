@extends('layouts.app')
@section('title', '采购产品市场')

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
              <div></div>
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

@endsection
