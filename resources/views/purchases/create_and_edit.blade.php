@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">

      <div class="card-header">
        <h1>
          Purchase /
          @if($purchase->id)
            Edit #{{ $purchase->id }}
          @else
            Create
          @endif
        </h1>
      </div>

      <div class="card-body">
        @if($purchase->id)
          <form action="{{ route('purchases.update', $purchase->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('purchases.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          
                <div class="mb-3">
                	<label for="title-field">Title</label>
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $purchase->title ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="body-field">Body</label>
                	<textarea name="body" id="body-field" class="form-control" rows="3">{{ old('body', $purchase->body ) }}</textarea>
                </div> 
                <div class="mb-3">
                    <label for="user_id-field">User_id</label>
                    <input class="form-control" type="text" name="user_id" id="user_id-field" value="{{ old('user_id', $purchase->user_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="goods_type_id-field">Goods_type_id</label>
                    <input class="form-control" type="text" name="goods_type_id" id="goods_type_id-field" value="{{ old('goods_type_id', $purchase->goods_type_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="reply_count-field">Reply_count</label>
                    <input class="form-control" type="text" name="reply_count" id="reply_count-field" value="{{ old('reply_count', $purchase->reply_count ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="view_count-field">View_count</label>
                    <input class="form-control" type="text" name="view_count" id="view_count-field" value="{{ old('view_count', $purchase->view_count ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="last_reply_user_id-field">Last_reply_user_id</label>
                    <input class="form-control" type="text" name="last_reply_user_id" id="last_reply_user_id-field" value="{{ old('last_reply_user_id', $purchase->last_reply_user_id ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="order-field">Order</label>
                    <input class="form-control" type="text" name="order" id="order-field" value="{{ old('order', $purchase->order ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="thumb-field">Thumb</label>
                	<input class="form-control" type="text" name="thumb" id="thumb-field" value="{{ old('thumb', $purchase->thumb ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="validity-field">Validity</label>
                	<input class="form-control" type="text" name="validity" id="validity-field" value="{{ old('validity', $purchase->validity ) }}" />
                </div> 
                <div class="mb-3">
                    <label for="is_indefinitely-field">Is_indefinitely</label>
                    <input class="form-control" type="text" name="is_indefinitely" id="is_indefinitely-field" value="{{ old('is_indefinitely', $purchase->is_indefinitely ) }}" />
                </div> 
                <div class="mb-3">
                	<label for="excerpt-field">Excerpt</label>
                	<textarea name="excerpt" id="excerpt-field" class="form-control" rows="3">{{ old('excerpt', $purchase->excerpt ) }}</textarea>
                </div> 
                <div class="mb-3">
                	<label for="slug-field">Slug</label>
                	<input class="form-control" type="text" name="slug" id="slug-field" value="{{ old('slug', $purchase->slug ) }}" />
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('purchases.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
