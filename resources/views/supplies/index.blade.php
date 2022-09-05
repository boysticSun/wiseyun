@extends('layouts.app')
@section('title', '供应产品市场')

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
            <div class="goods-type-box">
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 11) }}">
                  <i class="fa-solid fa-utensils"></i>
                  <span>食品加工</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 19) }}">
                  <i class="fa-solid fa-shirt"></i>
                  <span>服装皮革</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 21) }}">
                  <i class="fa-solid fa-boxes-packing"></i>
                  <span>包装印刷</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 23) }}">
                  <i class="fa-solid fa-capsules"></i>
                  <span>医药制造</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 17) }}">
                  <i class="fa-solid fa-industry"></i>
                  <span>设备制造</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 25) }}">
                  <i class="fa-solid fa-a"></i>
                  <span>资质认证</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 27) }}">
                  <i class="fa-sharp fa-solid fa-globe"></i>
                  <span>网站建设</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 28) }}">
                  <i class="fa-solid fa-server"></i>
                  <span>云主机</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 30) }}">
                  <i class="fa-solid fa-star"></i>
                  <span>星级上云</span>
                </a>
              </div>
              <div class="supply-types">
                <a href="{{ route('goodstypes.supplytypes', 35) }}">
                  <i class="fa-solid fa-gears"></i>
                  <span>其他</span>
                </a>
              </div>
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
<div class="recommend-manufacturer mt-5">
  <div class="head">
    <img src="/images/recommend-manufacturer-head.png">
  </div>
  <div class="body"></div>
</div>

<div class="recommend-supply mt-5">
  <div class="head">
    <img src="/images/recommend-supply-head.png">
  </div>
  <div class="body">
    <div class="supply-tabs">
      <ul class="nav nav-pills">
        @foreach ($topgoodstypes as $key=>$type)
          <li class="nav-item">
            <a class="nav-link @if($key == 0) active @endif" data-bs-toggle="pill" data-bs-target="#type-{{ $type->id }}" href="javascript:;">
              <span>{{ $type->name }}</span>
              <em></em>
            </a>
          </li>
        @endforeach
      </ul>
      <div class="tab-content">
        @foreach ($topgoodstypes as $k=>$list)
          <div class="tab-pane @if($k == 0) active @endif" id="type-{{ $list->id }}">
            <a class="more" href="{{ route('goodstypes.supplytypes', $list->id) }}">{{ __('More') }} >></a>
            <div>
              @foreach ($list->supplies as $supplies)
                <div class="supplies-item">
                  <a class="supplies-item-img" href="{{ route('supplies.show', $supplies->id) }}">
                    <img src="@if(empty($supplies->thumb)) /images/mdefault.png @else {{ $supplies->thumb }} @endif">
                  </a>
                  <div class="title">{{ $supplies->title }}</div>
                  <div class="excerpt">{{ $supplies->excerpt }}</div>
                  <div class="price">
                    {{ $supplies->price }}/{{ $supplies->price_unit }}
                  </div>
                  <a class="buy-btn" href="{{ route('supplies.show', $supplies->id) }}">{{ __('Buy Now') }}</a>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
