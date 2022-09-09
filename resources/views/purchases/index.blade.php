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
              <img class="float-start me-2" src="/images/market-hot-btn.png" style="margin-top: 0.15rem;" />
              <div class="float-start text-white">热：</div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 30) }}" class="text-white text-decoration-none">星级上云</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 28) }}" class="text-white text-decoration-none">云主机</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 27) }}" class="text-white text-decoration-none">网站建设</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 31) }}" class="text-white text-decoration-none">企业服务</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 25) }}" class="text-white text-decoration-none">资质认证</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 4) }}" class="text-white text-decoration-none">机械设备</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 23) }}" class="text-white text-decoration-none">医药生产</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 21) }}" class="text-white text-decoration-none">包装印刷</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 20) }}" class="text-white text-decoration-none">家具制造</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 19) }}" class="text-white text-decoration-none">服装皮革</a>
              </div>
              <div class="float-start px-2">
                <a href="{{ route('goodstypes.purchasetypes', 11) }}" class="text-white text-decoration-none">食品加工</a>
              </div>
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

<div class="purchases-index-floor mt-5">
  <div class="head">
    <img src="/images/high-quality-purchase.png">
  </div>
  <div class="body">
    <div class="floor-tabs">
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
            <a class="more" href="{{ route('goodstypes.purchasetypes', $list->id) }}">{{ __('More') }} >></a>
            <div>
              @foreach ($list->purchases as $purchases)
                <div class="purchases-item">
                  <a class="name" href="{{ route('purchases.show', $purchases->id) }}"><span>{{ $purchases->title }}</span></a>
                  <div class="box">
                    <div class="row date">
                      <div class="col-md-6 date-left">
                        <div class="date-title">发布日期</div>
                        <div class="date-data">{{ $purchases->created_at->toDateString() }}</div>
                      </div>
                      <div class="col-md-6">
                        <div class="date-title">截止日期</div>
                        <div class="date-data">@if($purchases->is_indefinitely == 1) 长期有效 @else {{ $purchases->validity->toDateString() }} @endif</div>
                      </div>
                    </div>
                    <div class="time">
                      <div class="time-title">距离结束</div>
                      <div class="time-progress row">
                        <div class="progress col-md-7">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="col-md-1 p-0">&nbsp;</div>
                        <div class="time-word col-md-4">@if($purchases->is_indefinitely == 1) 长期有效 @else {{ $purchases->validity->toDateString() }} @endif</div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="purchases-index-floor mt-5">
  <div class="head">
    <img src="/images/new-purchase-orders.png">
  </div>
  <div class="body">
    <div class="floor-tabs">
      <ul class="nav nav-pills">
        @foreach ($topgoodstypes as $key=>$type)
          <li class="nav-item">
            <a class="nav-link @if($key == 0) active @endif" data-bs-toggle="pill" data-bs-target="#new-type-{{ $type->id }}" href="javascript:;">
              <span>{{ $type->name }}</span>
              <em></em>
            </a>
          </li>
        @endforeach
      </ul>
      <div class="tab-content">
        @foreach ($topgoodstypes as $k=>$list)
          <div class="tab-pane @if($k == 0) active @endif" id="new-type-{{ $list->id }}">
            <a class="more" href="{{ route('goodstypes.purchasetypes', $list->id) }}">{{ __('More') }} >></a>
            <div>
              @foreach ($list->isnewlist as $new)
                <div class="purchases-item">
                  <a class="name" href="{{ route('purchases.show', $new->id) }}"><span>{{ $new->title }}</span></a>
                  <div class="box">
                    <div class="row date">
                      <div class="col-md-6 date-left">
                        <div class="date-title">发布日期</div>
                        <div class="date-data">{{ $new->created_at->toDateString() }}</div>
                      </div>
                      <div class="col-md-6">
                        <div class="date-title">截止日期</div>
                        <div class="date-data">@if($new->is_indefinitely == 1) 长期有效 @else {{ $new->validity->toDateString() }} @endif</div>
                      </div>
                    </div>
                    <div class="time">
                      <div class="time-title">距离结束</div>
                      <div class="time-progress row">
                        <div class="progress col-md-7">
                          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="col-md-1 p-0">&nbsp;</div>
                        <div class="time-word col-md-4">@if($new->is_indefinitely == 1) 长期有效 @else {{ $new->validity->toDateString() }} @endif</div>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="row mt-5 mx-0">
  <div class="col-md-6 ps-0 pe-2">
    <div class="purchases-index-floor">
      <div class="head">
        <img src="/images/high-quality-purchaser.png">
      </div>
      <div class="body"></div>
    </div>
  </div>
  <div class="col-md-6 ps-2 pe-0">
    <div class="purchases-index-floor">
      <div class="head">
        <img src="/images/actual-time-purchase.png">
      </div>
      <div class="body"></div>
    </div>
  </div>
</div>

@endsection
