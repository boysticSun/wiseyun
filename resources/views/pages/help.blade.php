@extends('layouts.app')
@section('title', '帮助中心')

@section('searchbar')
  <div class="searchbar">
    <div class="container">
      <div class="row">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-6">
          <input class="form-control" type="text" name="keyword" value=""
              placeholder="请输入您要搜索的关键词" required />
        </div>
        <div class="col-md-2">
          <div class="row">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa-solid fa-magnifying-glass"></i> 搜索</button>
          </div>
        </div>
        <div class="col-md-2">&nbsp;</div>
      </div>
      <div class="row mt-3">
        <div class="col-md-2">&nbsp;</div>
        <div class="col-md-8">
          <span>搜索热词：</span>
          <a class="text-decoration-none" href="javascript:;">账号注册</a>
          <a class="text-decoration-none" href="javascript:;">域名注册</a>
        </div>
        <div class="col-md-2">&nbsp;</div>
      </div>
    </div>
  </div>
@stop

@section('content')
  <div class="help-container">
    <div class="row">
    @foreach ($classes as $class)
      <div class="col-md-3">
        <div class="help-class-fst" href="javascript:;">
          {{ $class->name }}
        </div>
        <div>
          @foreach($class->child as $child)
          <a class="text-decoration-none help-class-snd" href="#">
            {{ $child->name }}
          </a>
          @endforeach
        </div>
      </div>
    @endforeach
    </div>
  </div>
@stop
