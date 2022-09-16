@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')

  <div class="row user-profile-show">

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
      <div class="card ">
        <img class="card-img-top"
          src="{{ $user->avatar }}"
          alt="{{ $user->name }}">
        <hr>
        <div class="card-body">
          <h5><strong>个人简介</strong></h5>
          <p>{{ $user->introduction }}</p>
          <hr>
          <h5><strong>注册于</strong></h5>
          <p>{{ $user->created_at->diffForHumans() }}</p>
        </div>
      </div>
      @if (Auth::user()->id == $user->id)
      <div class="card mt-3">
        <div class="card-body">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-muted px-0" href="{{ route('users.supplies', $user->id) }}">
                <div class="row m-0">
                  <div class="col-md-1 p-0 text-center"><i class="fa-solid fa-bag-shopping"></i></div>
                  <div class="col-md-11">我的采购</div>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted px-0" href="{{ route('supplies.create') }}">
                <div class="row m-0">
                  <div class="col-md-1 p-0 text-center"><i class="fa-solid fa-cart-plus"></i></div>
                  <div class="col-md-11">添加采购</div>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted px-0" href="{{ route('users.purchases', $user->id) }}">
                <div class="row m-0">
                  <div class="col-md-1 p-0 text-center"><i class="fa-solid fa-truck"></i></div>
                  <div class="col-md-11">我的供应</div>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted px-0" href="{{ route('purchases.create') }}">
                <div class="row m-0">
                  <div class="col-md-1 p-0 text-center"><i class="fa-solid fa-cart-plus"></i></div>
                  <div class="col-md-11">添加供应</div>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted px-0" href="{{ route('users.purchaseorders', $user->id) }}">
                <div class="row m-0">
                  <div class="col-md-1 p-0 text-center"><i class="fa-solid fa-clipboard-list"></i></div>
                  <div class="col-md-11">售出订单</div>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted px-0" href="{{ route('users.supplyorders', $user->id) }}">
                <div class="row m-0">
                  <div class="col-md-1 p-0 text-center"><i class="fa-solid fa-clipboard-list"></i></div>
                  <div class="col-md-11">采购订单</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      @endif
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <div class="card ">
        <div class="card-body">
          <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
        </div>
      </div>
      <hr>

      {{-- 用户发布的内容 --}}
      <div class="card ">
        <div class="card-body user-news-list">
          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active bg-transparent" data-bs-toggle="pill" data-bs-target="#purchase" href="javascript:;">发布的采购</a></li>
            <li class="nav-item"><a class="nav-link bg-transparent" data-bs-toggle="pill" data-bs-target="#supply" href="javascript:;">发布的供应</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="purchase">
              @include('users._purchases', ['purchases' => $user->purchases()->recent()->paginate(10)])
            </div>
            <div class="tab-pane" id="supply">
              @include('users._supplies', ['supplies' => $user->supplies()->recent()->paginate(10)])
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@stop
