@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          News /
          @if($news->id)
            Edit #{{ $news->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($news->id)
          <form action="{{ route('news.update', $news->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('news.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="mb-3">
                	<label for="title-field">Title</label>
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $news->title ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="body-field">Body</label>
                	<textarea name="body" id="body-field" class="form-control" rows="3">{{ old('body', $news->body ) }}</textarea>
                </div> 
                <div class="mb-3">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $news->user_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="category_id-field">Category_id</label>
                    <input class="form-control" type="text" name="category_id" id="category_id-field" value="{{ old('category_id', $news->category_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="reply_count-field">Reply_count</label>
                    <input class="form-control" type="text" name="reply_count" id="reply_count-field" value="{{ old('reply_count', $news->reply_count ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="view_count-field">View_count</label>
                    <input class="form-control" type="text" name="view_count" id="view_count-field" value="{{ old('view_count', $news->view_count ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="last_reply_user_id-field">Last_reply_user_id</label>
                    <input class="form-control" type="text" name="last_reply_user_id" id="last_reply_user_id-field" value="{{ old('last_reply_user_id', $news->last_reply_user_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="order-field">Order</label>
                    <input class="form-control" type="text" name="order" id="order-field" value="{{ old('order', $news->order ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="excerpt-field">Excerpt</label>
                	<textarea name="excerpt" id="excerpt-field" class="form-control" rows="3">{{ old('excerpt', $news->excerpt ) }}</textarea>
                </div> 
                <div class="mb-3">
                	<label for="slug-field">Slug</label>
                	<input class="form-control" type="text" name="slug" id="slug-field" value="{{ old('slug', $news->slug ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('news.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
