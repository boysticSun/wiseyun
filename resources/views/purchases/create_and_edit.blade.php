@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-10 offset-md-1 mt-5">
    <div class="card purchases-add-edit px-5 py-3">

      <div class="card-header bg-white">
        <h4>
          采购
          @if($purchase->id)
            编辑
          @else
            添加
          @endif
        </h4>
      </div>

      <div class="card-body">
        @if($purchase->id)
          <form action="{{ route('purchases.update', $purchase->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="PUT">
        @else
          <form action="{{ route('purchases.store') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        @endif

          @include('common.error')

          <input type="hidden" name="_token" value="{{ csrf_token() }}">


          <div class="mb-3">
            <label for="title-field">标题 <span class="text-danger">*</span></label>
            <div class="p-1"></div>
            <input class="form-control" type="text" name="title" id="title-field" value="{{ old('title', $purchase->title ) }}" placeholder="请填写标题" />
          </div>
          <div class="mb-3">
            <label for="thumb-field">图片</label>
            <div class="p-1"></div>
            <input type="file" name="thumb" class="form-control">
            @if($purchase->thumb)
              <br>
              <img class="thumbnail img-responsive" src="{{ $purchase->thumb }}" width="200" />
            @endif
          </div>
          <div class="mb-3">
            <label for="excerpt-field">简介</label>
            <div class="p-1"></div>
            <textarea name="excerpt" id="excerpt-field" class="form-control" rows="3" placeholder="简介">{{ old('excerpt', $purchase->excerpt ) }}</textarea>
          </div>
          <div class="mb-3">
            <label for="typeids-field">分类 <span class="text-danger">*</span></label>
            <div class="p-1"></div>
            <div class="row m-0">
              @foreach($types as $type)
              <div class="form-check col-md-2">
                <input class="form-check-input" type="checkbox" name="typeids[]" value="{{ $type->id }}" id="flexCheckDefault-{{ $type->id }}"{{ $type->checked }}>
                <label class="form-check-label" for="flexCheckDefault-{{ $type->id }}">
                  {{ $type->name }}
                </label>
              </div>
              @endforeach
            </div>
          </div>
          <div class="mb-3">
            <label for="validity-field">有效期至</label>
            <div class="p-1"></div>
            <div class="input-group date form_date row m-0" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input" data-link-format="yyyy-mm-dd">
              <input class="form-control col-md-3" size="16" type="text" value="{{ old('validity', $purchase->validity ) }}" readonly>
              <span class="input-group-addon col-md-1 text-center border"><span class="glyphicon glyphicon-calendar"><i class="fa-solid fa-calendar-days mt-2 fs-5 text-muted"></i></span></span>
              <span class="col-md-8"></span>
            </div>
            <input type="hidden" id="dtp_input" name="validity" value="{{ old('validity', $purchase->validity ) }}" />
          </div>
          <div class="mb-3">
            <label for="is_indefinitely-field">是否长期</label>
            <div class="p-1"></div>
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" role="switch" name="is_indefinitely" id="" @checked(old('is_indefinitely', $purchase->is_indefinitely))>
            </div>
          </div>
          <div class="mb-3">
            <label for="order-field">排序</label>
            <div class="p-1"></div>
            <input class="form-control" type="text" name="order" id="order-field" value="@if($purchase->id){{ old('order', $purchase->order ) }}@else 0 @endif" placeholder="排序" />
          </div>
          <div class="mb-3">
            <label for="body-field">详情 <span class="text-danger">*</span></label>
            <div class="p-1"></div>
            <textarea name="body" id="editor" class="form-control" rows="3" placeholder="详情">{{ old('body', $purchase->body ) }}</textarea>
          </div>

          <div class="well well-sm">
            <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
            <a class="btn btn-link float-xs-right" href="{{ route('purchases.index') }}">{{ __('Go back') }}</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('styles')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
  <link rel="stylesheet" media="screen" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}">
@stop

@section('scripts')
  <script type="text/javascript" src="{{ asset('js/module.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/hotkeys.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/uploader.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/simditor.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap-datetimepicker.js') }}" charset="UTF-8"></script>
  <script type="text/javascript" src="{{ asset('js/locales/bootstrap-datetimepicker.zh-CN.js') }}" charset="UTF-8"></script>

  <script>
    $(document).ready(function() {
      var editor = new Simditor({
        textarea: $('#editor'),
        upload: {
          url: '{{ route('purchases.upload_image') }}',
          params: {
            _token: '{{ csrf_token() }}'
          },
          fileKey: 'upload_file',
          connectionCount: 3,
          leaveConfirm: '文件上传中，关闭此页面将取消上传。'
        },
        pasteImage: true,
      });

      $('.form_date').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
      });
    });
  </script>
@stop
