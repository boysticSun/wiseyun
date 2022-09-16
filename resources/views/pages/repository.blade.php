@extends('layouts.app')
@section('title', '资源库')

@section('content')
  <div class="bg-white mt-5 py-4">
    @foreach($company as $item)
    <a class="row m-0 px-5 py-4 border-bottom text-decoration-none" href="{{ route('repositoryshow', $item->id) }}">
      <div class="col-md-2">
        @if($item->logo)
        <img src="{{ $item->logo }}">
        @else
        <div class="nomal-logo">
          {{ $item->company_name }}
        </div>
        @endif
      </div>
      <div class="col-md-7">
        <h5 class="fw-bold text-body">{{ $item->company_name }}</h5>
        <div class="text-muted repository-brief">{{ $item->brief }}</div>
      </div>
      <div class="col-md-3 repository-right">
        <div class="repository-right-item text-body">
          <b>入驻时间</b>：
          <span class="text-muted">{{ $item->created_at->toDateString() }}</span>
        </div>
        <div class="repository-right-item text-body">
          <b><i>联系人</i></b>：
          <span class="text-muted">{{ $item->legal_representative }}</span>
        </div>
        <div class="repository-right-item text-body">
          <b>联系方式</b>：
          <span class="text-muted">{{ $item->user->mobile }}</span>
        </div>
      </div>
    </a>
    @endforeach
    {{-- 分页 --}}
    <div class="mt-5 px-2">
      {!! $company->appends(Request::except('page'))->render() !!}
    </div>
  </div>
@stop
