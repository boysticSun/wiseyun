@extends('layouts.app')

@section('title', $news->title)
@section('description', $news->excerpt)

@section('content')

  <div class="row mt-5">

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 news-content">
      <div class="card ">
        <div class="card-body">
          <h1 class="text-center mt-3 mb-3">
            {{ $news->title }}
          </h1>

          <div class="article-meta text-center text-secondary">
            {{ $news->created_at->diffForHumans() }}
            ⋅
            <i class="far fa-comment"></i>
            {{ $news->reply_count }}
          </div>

          <div class="news-body mt-4 mb-4">
            {!! $news->body !!}
          </div>

          @can('update', $news)
            <div class="operate">
              <hr>
              <a href="{{ route('news.edit', $news->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
                <i class="far fa-edit"></i> 编辑
              </a>
              <form action="{{ route('news.destroy', $news->id) }}" method="post"
                    style="display: inline-block;"
                    onsubmit="return confirm('您确定要删除吗？');">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-outline-secondary btn-sm">
                  <i class="far fa-trash-alt"></i> 删除
                </button>
              </form>
            </div>
          @endcan

        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
      <div class="card ">
        <div class="card-body">
          {{-- <div class="text-center">
            作者：{{ $news->user->name }}
          </div>
          <hr>
          <div class="media">
            <div align="center">
              <a href="{{ route('users.show', $news->user->id) }}">
                <img class="thumbnail img-fluid" src="{{ $news->user->avatar }}" width="300px" height="300px">
              </a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>

  </div>
@stop
