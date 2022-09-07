@extends('layouts.app')

@section('title', $supply->title)
@section('description', $supply->excerpt)

@section('banner')
  <div class="show-top-banner" style="background: url('/images/show-banner-t.jpg');">
    <div class="container pt-5">
      <div class="row">
        <div class="col-md-9">
          <h1>{{ $supply->title }}</h1>
          <div class="float-start">
            @if($supply->thumb)
            <img class="mt-3 mb-3" src="{{ $supply->thumb }}">
            @else
            <i class="fa-regular fa-image" style="font-size: 200px; color: #ffffff;"></i>
            @endif
          </div>
          <div class="float-start p-4">
            <div class="price">
              @if ($supply->is_negotiable == 1)
              <button class="btn btn-primary px-5">面议</button>
              @else
              <span>{{ $supply->price }}</span> / <span>{{ $supply->price_unit }}</span>
              @endif
            </div>
            <div class="validity pt-3">
              <p>发布时间：{{ $supply->created_at->toDateTimeString() }}</p>
              <p>有效期至：@if($supply->is_indefinitely == 1) 长期有效 @else {{ $supply->validity }} @endif</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="supplier pt-3">
            <h5 class="mb-3">示例供应商企业名称</h5>
            <div class="line"></div>
            <div class="info">
              <p>入驻时间：</p>
              <p>企业供应：</p>
              <p>联 系 人：</p>
              <p>联系电话：</p>
              <p>点 击 量：</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('content')
  <div class="col-md-12 mt-5">
    <div class="supply-body card px-4 py-3">
      <div class="card-header bg-white">
        <h2>{{ __('Detail') }}</h2>
      </div>

      <div class="card-body">
        <p>
          {{ $supply->body }}
        </p>
      </div>
    </div>
  </div>
@endsection
