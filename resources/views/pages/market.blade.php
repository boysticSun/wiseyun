@extends('layouts.app')
@section('title', '需求市场')

@section('banner')
  <div class="market-banner" style="background: url('/images/banner.jpg');"></div>
@stop

@section('content')
  <div class="market-topbar mt-5 mb-5">
    <div class="search">
      <form method="POST" action="{{ route('market_search') }}">
        <div class="row">
          <div class="col-md-2 select">
            <select class="form-select" aria-label="type" name="type">
              <option value="1" selected>{{ __('Find Enterprise') }}</option>
              <option value="2">{{ __('Find Supply') }}</option>
              <option value="3">{{ __('Find Purchase') }}</option>
            </select>
          </div>
          <div class="col-md-8 keyword">
            <input id="keyword" type="keyword" class="form-control @error('keyword') is-invalid @enderror" name="keyword" value="{{ old('keyword') }}" required autocomplete="keyword" autofocus placeholder="{{ __('Please Enter A Keyword To Search') }}">
          </div>
          <div class="col-md-2 button">
            <div class="row">
              <button type="submit" class="btn btn-primary btn-block">
                {{ __('Start Search') }}
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="serve row">
      <a class="col-md-3 p-4 serve-item fst" href="#">
        <img src="/images/serve-tb-1.png">
        <div class="serve-right">
          <div class="line-fst">
            <span class="title">采购市场</span>
            <span class="label">供需</span>
          </div>
          <div class="line-snd">采购 ></div>
        </div>
      </a>
      <a class="col-md-3 p-4 serve-item snd" href="#">
        <img src="/images/serve-tb-2.png">
        <div class="serve-right">
          <div class="line-fst">
            <span class="title">交易市场</span>
            <span class="label">商城</span>
          </div>
          <div class="line-snd">挑选产品 ></div>
        </div>
      </a>
      <a class="col-md-3 p-4 serve-item trd" href="#">
        <img src="/images/serve-tb-3.png">
        <div class="serve-right">
          <div class="line-fst">
            <span class="title">企业服务</span>
            <span class="label">服务</span>
          </div>
          <div class="line-snd">咨询服务 ></div>
        </div>
      </a>
      <a class="col-md-3 p-4 serve-item fth" href="#">
        <img src="/images/serve-tb-4.png">
        <div class="serve-right">
          <div class="line-fst">
            <span class="title">金融服务</span>
            <span class="label">供需</span>
          </div>
          <div class="line-snd">咨询客服 ></div>
        </div>
      </a>
    </div>
    <div class="data row">
      <div class="col-md-3 p-3 data-item">
        <span class="text">促成交易规模</span>
        <span class="number fst">100+</span>
      </div>
      <div class="col-md-3 p-3 data-item">
        <span class="text">累计对接需求</span>
        <span class="number snd">100+</span>
      </div>
      <div class="col-md-3 p-3 data-item">
        <span class="text">累计服务企业</span>
        <span class="number trd">100+</span>
      </div>
      <div class="col-md-3 p-3 data-item">
        <span class="text">累计上线企业</span>
        <span class="number fth">100+</span>
      </div>
    </div>
  </div>
@stop

@section('customcontent')
  <div class="butt-content">
    <div class="container">
      <h5 class="floor-title">精准采购对接</h5>
      <div class="floor-excerpt">
        阳光高效的互联网采购整体解决方案，帮助企业实现有效需求的高效对接
        <a href="{{ route('purchases.index') }}">{{ __('More Purchase') }} <i class="fa-solid fa-caret-right"></i></a>
      </div>
      <div class="swiper purchaseSwiper">
        <div class="swiper-wrapper">
          @foreach ($purchases as $purchase)
          <div class="swiper-slide">
            <div class="slide-row">
              @foreach ($purchase as $purch)
              <div class="slide-item">
                <a class="name" href="{{ route('purchases.show', $purch->id) }}"><span>{{ $purch->title }}</span></a>
                <div class="box">
                  <div class="row date">
                    <div class="col-md-6 date-left">
                      <div class="date-title">发布日期</div>
                      <div class="date-data">{{ $purch->created_at->toDateString() }}</div>
                    </div>
                    <div class="col-md-6">
                      <div class="date-title">截止日期</div>
                      <div class="date-data">@if($purch->is_indefinitely == 1) 长期有效 @else {{ $purch->validity->toDateString() }} @endif</div>
                    </div>
                  </div>
                  <div class="time">
                    <div class="time-title">距离结束</div>
                    <div class="time-progress row">
                      <div class="progress col-md-7">
                        <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <div class="col-md-1 p-0">&nbsp;</div>
                      <div class="time-word col-md-4">@if($purch->is_indefinitely == 1) 长期有效 @else {{ $purch->validity->toDateString() }} @endif</div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
  <div class="butt-content">
    <div class="container">
      <h5 class="floor-title">交易市场对接</h5>
      <div class="floor-excerpt">
        阳光高效的互联网平台，帮助企业实现高效的产品交易对接
        <a href="{{ route('supplies.index') }}">{{ __('More Supply') }} <i class="fa-solid fa-caret-right"></i></a>
      </div>
      <div class="swiper supplySwiper">
        <div class="swiper-wrapper">
          @foreach ($supplies as $supply)
          <div class="swiper-slide">
            <div class="slide-row">
              @foreach ($supply as $list)
              <div class="slide-item">
                <a href="{{ route('supplies.show', $list->id) }}">
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
          </div>
          @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
@stop

@section('whitecontent')
  <div class="container enterprise-services">
    <h5 class="floor-title">热门企业服务</h5>
    <div class="floor-excerpt">根据企业经营的各个环节，提供企业全生态链专业服务，企业经营全程参与，助力企业高速成长</div>
  </div>
@stop
