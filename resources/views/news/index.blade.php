@extends('layouts.app')

@section('title', isset($category) ? $category->name : '新闻资讯列表')

@section('content')

<div class="row mt-5 mb-5">
  <div class="col-lg-9 col-md-9 news-list">

    <div class="card ">

      <div class="card-header bg-transparent">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link {{ active_class(if_route('news.index')) }}" href="{{ route('news.index') }}">最新资讯</a></li>
          <li class="nav-item"><a class="nav-link {{ category_nav_active(1) }}" href="{{ route('categories.show', 1) }}">今日热点</a></li>
          <li class="nav-item"><a class="nav-link {{ category_nav_active(2) }}" href="{{ route('categories.show', 2) }}">行业动态</a></li>
          <li class="nav-item"><a class="nav-link {{ category_nav_active(3) }}" href="{{ route('categories.show', 3) }}">政策发布</a></li>
          <li class="nav-item"><a class="nav-link {{ category_nav_active(4) }}" href="{{ route('categories.show', 4) }}">疫情资讯</a></li>
        </ul>
      </div>

      <div class="card-body">
        @if (isset($category))
          <div class="alert alert-info" role="alert">
            {{ $category->name }} ：{{ $category->description }}
          </div>
        @endif
        {{-- 新闻资讯列表 --}}
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
