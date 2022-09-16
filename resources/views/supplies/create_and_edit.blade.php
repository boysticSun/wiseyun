@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1 mt-5">
    <div class="card ">

      <div class="card-header">
        <h4>
          采购
          @if($supply->id)
            编辑 #{{ $supply->id }}
          @else
            添加
          @endif
        </h4>
      </div>

      <div class="card-body">
        @if($supply->id)
          <form action="{{ route('supplies.update', $supply->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('supplies.store') }}" method="POST" accept-charset="UTF-8">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="mb-3">
                  <label for="title-field">标题</label>
                    <div class="p-1"></div>
                	<input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $supply->title ) }}" placeholder="请填写标题" />
                </div>
                <div class="mb-3">
                  <label for="excerpt-field">简介</label>
                    <div class="p-1"></div>
                	<textarea name="excerpt" id="excerpt-field" class="form-control" rows="3" placeholder="简介">{{ old('excerpt', $supply->excerpt ) }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="typeids-field">分类</label>
                    <div class="p-1"></div>
                    <div class="row m-0">
                      @foreach($types as $type)
                      <div class="form-check col-md-2">
                        <input class="form-check-input" type="checkbox" name="typeids" value="" id="flexCheckDefault-{{ $type->id }}">
                        <label class="form-check-label" for="flexCheckDefault-{{ $type->id }}">
                          {{ $type->name }}
                        </label>
                      </div>
                      @endforeach
                    </div>
                </div>
                <div class="mb-3">
                    <label for="order-field">排序</label>
                    <div class="p-1"></div>
                    <input class="form-control" type="text" name="order" id="order-field" value="{{ old('order', $supply->order ) }}" placeholder="排序" />
                </div>
                <div class="mb-3">
                	<label for="body-field">详情</label>
                  <div class="p-1"></div>
                	<textarea name="body" id="editor" class="form-control" rows="3" placeholder="详情">{{ old('body', $supply->body ) }}</textarea>
                </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-link float-xs-right" href="{{ route('supplies.index') }}"> <- Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/hotkeys.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/uploader.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/simditor.js') }}"></script>

  <script>
    $(document).ready(function() {
      var editor = new Simditor({
        textarea: $('#editor'),
        upload: {
          url: '{{ route('news.upload_image') }}',
          params: {
            _token: '{{ csrf_token() }}'
          },
          fileKey: 'upload_file',
          connectionCount: 3,
          leaveConfirm: '文件上传中，关闭此页面将取消上传。'
        },
        pasteImage: true,
      });
    });
  </script>
@stop
