@extends('layouts.app')

@section('title', '新闻资讯列表')

@section('content')

<div class="row mb-5">
  <div class="col-lg-9 col-md-9 news-list">
    <div class="card ">

      <div class="card-header bg-transparent">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#">最新资讯</a></li>
          <li class="nav-item"><a class="nav-link" href="#">今日热点</a></li>
          <li class="nav-item"><a class="nav-link" href="#">行业动态</a></li>
          <li class="nav-item"><a class="nav-link" href="#">政策发布</a></li>
          <li class="nav-item"><a class="nav-link" href="#">疫情资讯</a></li>
        </ul>
      </div>

      <div class="card-body">
        {{-- 话题列表 --}}
        @include('news._news_list', ['news' => $news])
        {{-- 分页 --}}
        <div class="mt-5">
          {!! $news->appends(Request::except('page'))->render() !!}
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar">
    @include('news._sidebar')
  </div>
</div>

@endsection
