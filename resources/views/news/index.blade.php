@extends('layouts.app')

@section('title', isset($category) ? $category->name : '新闻资讯列表')

@section('content')

<div class="row mt-5 mb-5">
  <div class="col-lg-9 col-md-9 news-list">

    <div class="card ">

      @if (!empty($children))
      <div class="card-header bg-transparent">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link {{ active_class(if_route('news.index')) }}" href="{{ route('news.index', $category->id) }}">最新资讯</a></li>
          @foreach ($children as $child)
          <li class="nav-item"><a class="nav-link {{ category_nav_active($child->id) }}" href="{{ route('categories.show', $child->id) }}">{{ $child->name }}</a></li>
          @endforeach
        </ul>
      </div>
      @endif

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
