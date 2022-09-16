@extends('layouts.app')

@section('title', '我的供应')

@section('content')
  <div class="mt-5">
    <h4 class="bg-white p-3">我的供应</h4>
    @include('users._supplies', ['supplies' => $user->supplies()->recent()->paginate(15)])
  </div>
@stop
