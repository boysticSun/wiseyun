@extends('layouts.app')
@section('title', '关于我们')

@section('banner')
  <div class="about-banner pt-5">
    <h1 class="text-white text-center pt-5">关于我们</h1>
    <div class="text-white text-center pt-5">平台背书 、精准赋能、 量体定制 、提质增效</div>
    <div class="container" style="padding-top: 130px;">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link @if($category->id == 8)active @endif" href="@if($category->id == 8)javascript:; @else {{ route('about', 8) }} @endif">
            <span>平台介绍</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($category->id == 9)active @endif" href="@if($category->id == 9)javascript:; @else {{ route('about', 9) }} @endif">
            <span>平台安全</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($category->id == 10)active @endif" href="@if($category->id == 10)javascript:; @else {{ route('about', 10) }} @endif">
            <span>发展历程</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if($category->id == 11)active @endif" href="@if($category->id == 11)javascript:; @else {{ route('about', 11) }} @endif">
            <span>荣誉资质</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
@stop

@section('content')
  <div class="container py-5">
    @foreach ($category->news as $news)
    {!! $news->body !!}
    @endforeach
  </div>
@stop
