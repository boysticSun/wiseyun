@extends('layouts.app')

@section('title', $purchase->title)
@section('description', $purchase->excerpt)

@section('content')

<div class="row mt-5 mb-5 mx-0">
  <div class="col-lg-9 col-md-9 ps-0 pe-1">

    <div class="card ">
      <div class="head">
        <img src="/images/purchase-show.png">
      </div>
      <div class="body p-4">
        <div class="purchase-info-left">
          @if($purchase->thumb)
          <img src="{{ $purchase->thumb }}">
          @else
          <i class="fa-regular fa-image"></i>
          @endif
        </div>
        <div class="purchase-info-right ps-4 pt-3">
          <h5 class="mb-4">{{ $purchase->title }}</h5>
          <div class="text-muted">{{ __('Purchase Type') }}：{{ $purchase->goods_type->name }}</div>
          <div class="border-top border-bottom mt-4 py-2">
            <span class="text-muted pe-5">{{ __('Created At') }}：{{ $purchase->created_at->toDateString() }}</span>
            <span class="text-info pe-5">@if($purchase->is_indefinitely == 1) {{ __('Is Indefinitely') }} @else {{ __('Validity') }}：{{ $purchase->validity->toDateString() }} @endif</span>
            <span class="text-muted">{{ __('View Count') }}：{{ $purchase->view_count }}</span>
          </div>
          <div class="purchase-info-buttons mt-4">
            <a href="#" class="text-decoration-none py-2 px-4 me-3">查看联系人</a>
            <a href="#" class="text-decoration-none py-2 px-5">报名</a>
          </div>
        </div>
      </div>
      <div class="head">
        <img src="/images/purchase-info.png">
      </div>
      <div class="body p-4">
        {{ $purchase->body }}
      </div>
      <div class="head">
        <img src="/images/purchase-log.png">
      </div>
      <div class="body p-4">
        <p>{{ __('No Record') }}</p>
      </div>
    </div>

  </div>

  <div class="col-lg-3 col-md-3 ps-1 pe-0">
    <div class="card">
      <div class="head">
        <img src="/images/purchase-company.png">
      </div>
      <div class="body">
        <p class="company-p"><span class="company-label"><i style="letter-spacing: 7px;">服务商</i></span>：***</p>
        <p class="company-p"><span class="company-label"><i style="letter-spacing: 7px;">联系人</i></span>：***</p>
        <p class="company-p"><span class="company-label"><i style="letter-spacing: 28px;">电话</i></span>：***</p>
        <p class="company-p"><span class="company-label"><i style="letter-spacing: 28px;">地址</i></span>：***</p>
        <p class="company-p"><span class="company-label"><i>公司简介</i></span>：***</p>
      </div>
    </div>
    <a href="#" class="mt-3" style="display: block;">
      <img src="/images/purchase-talk.png">
    </a>
  </div>

</div>

@endsection
