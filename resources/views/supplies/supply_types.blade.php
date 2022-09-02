@extends('layouts.app')
@section('title', '供应产品列表')

@section('banner')
  <div class="market-top-banner" style="background: url('/images/market-top-banner.png');">
    <div class="container">
      <div class="supply-banner-top">
        <h5>帮助企业实现有效需求的高效对接</h5>
        <h1>精准供需，就找智慧wise</h1>
      </div>
      <div class="supply-banner-bottom"></div>
    </div>
  </div>
@stop

@section('content')
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
