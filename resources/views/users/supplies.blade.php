@extends('layouts.app')

@section('title', '我的供应')

@section('content')
  <div class="mt-5">
    <h4 class="bg-white p-3">
      <span>我的供应</span>
      <a href="{{ route('supplies.create') }}" class="float-end text-decoration-none text-muted fs-5"><i class="fa-solid fa-plus"></i> 添加</a>
    </h4>
    @include('users._supplies', ['supplies' => $user->supplies()->recent()->paginate(15)])
  </div>
@stop
