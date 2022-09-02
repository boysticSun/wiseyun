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
          <div class="col-md-8">
            <div class="search">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input id="keyword" type="keyword" class="form-control @error('keyword') is-invalid @enderror" name="keyword" value="{{ old('keyword') }}" required autocomplete="keyword" autofocus placeholder="{{ __('Please Enter A Keyword To Search') }}">
            </div>
          </div>
          <div class="col-md-4"></div>
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
