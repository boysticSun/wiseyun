@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-10 offset-md-1">
      <div class="card mt-5">

        <div class="card-body">
          <h2 class="">
            <i class="far fa-edit"></i>
            @if ($news->id)
              编辑新闻资讯
            @else
              新建新闻资讯
            @endif
          </h2>

          <hr>

          @if ($news->id)
            <form action="{{ route('news.update', $news->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
            @else
              <form action="{{ route('news.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          @endif

          <input type="hidden" name="_token" value="{{ csrf_token() }}">

          @include('shared._error')

          <div class="mb-3">
            <input class="form-control" type="text" name="title" value="{{ old('title', $news->title) }}"
              placeholder="请填写标题" required />
          </div>

          <div class="mb-3">
            <select class="form-control" name="category_id" required>
              <option value="" hidden disabled selected>请选择分类</option>
              @foreach ($categories as $value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-4">
            <label for="" class="avatar-label form-label">缩略图</label>
            <input type="file" name="thumb" class="form-control">
            @if($news->thumb)
              <br>
              <img class="thumbnail img-responsive" src="{{ $news->thumb }}" width="200" />
            @endif
          </div>

          <div class="mb-3">
            <textarea name="body" class="form-control" id="editor" rows="6" placeholder="请填入至少三个字符的内容。"
              required>{{ old('body', $news->body) }}</textarea>
          </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary"><i class="far fa-save mr-2" aria-hidden="true"></i> 保存</button>
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
