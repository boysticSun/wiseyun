@extends('layouts.app')

@section('title', '我的采购')

@section('content')
  <div class="mt-5">
    <h4 class="bg-white p-3">
      <span>我的采购</span>
      <a href="{{ route('purchases.create') }}" class="float-end text-decoration-none text-muted fs-5"><i class="fa-solid fa-plus"></i> 添加</a>
    </h4>
    @include('users._purchases', ['purchases' => $user->purchases()->recent()->paginate(15)])
  </div>
@stop
