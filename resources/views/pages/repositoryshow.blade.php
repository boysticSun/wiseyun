@extends('layouts.app')
@section('title', $company->company_name)

@section('content')
  <div class="bg-white mt-5 py-4 px-5">
    <div class="repository-head row m-0 pb-4">
      <div class="logo col-md-2 ps-0">
        @if($company->logo)
        <img src="{{ $company->logo }}">
        @else
        <div class="nomal-logo">
          {{ $company->company_name }}
        </div>
        @endif
      </div>
      <div class="head-right col-md-10 pe-0 pt-4">
        <h4>{{ $company->company_name }}</h4>
        <div class="row m-0 pt-3">
          <div class="col-md-3 ps-0">
            <i class="fa-solid fa-user-tie text-info"></i>
            <span>联系人：{{ $company->legal_representative }}</span>
          </div>
          <div class="col-md-4 ps-0">
            <i class="fa-solid fa-phone text-info"></i>
            <span>联系方式：{{ $company->user->mobile }}</span>
          </div>
        </div>
      </div>
    </div>

    <ul class="nav nav-tabs repository-tabs">
      <li class="nav-item">
        <a class="nav-link text-body active" href="javascript:;">工商信息</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-body" href="javascript:;">获得资质</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-body" href="javascript:;">应用产品</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-body" href="javascript:;">企业服务</a>
      </li>
    </ul>

    <div class="floor">
      <div class="floor-head text-info fs-4 pt-4 pb-1 border-bottom">
        <i class="fa-solid fa-clipboard-list"></i>
        <span>工商信息</span>
      </div>
      <div class="floor-content py-3">
        <div class="floor-left px-0">
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">企业统一社会信用代码</div>
            <div class="col-md-8">{{ $company->credit_code }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">法定代表人</div>
            <div class="col-md-8">{{ $company->legal_representative }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">成立时间</div>
            <div class="col-md-8">{{ $company->establish_date }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">公司类型</div>
            <div class="col-md-8">{{ $company->type }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">经营状态</div>
            <div class="col-md-8">@if($company->status == 1) 正常 @else 非正常 @endif</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">登记机关</div>
            <div class="col-md-8">{{ $company->registration_authority }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">人员规模</div>
            <div class="col-md-8">{{ $company->staff_size }}人</div>
          </div>
        </div>
        <div class="floor-right px-0">
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">{{ __('Registered Capital') }}</div>
            <div class="col-md-8 pe-0">{{ $company->registered_capital }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">所属行业</div>
            <div class="col-md-8 pe-0">{{ $company->industry }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">核准日期</div>
            <div class="col-md-8 pe-0">{{ $company->approval_date }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">企业地址</div>
            <div class="col-md-8 pe-0">{{ $company->address }}</div>
          </div>
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">经营范围</div>
            <div class="col-md-8 pe-0">{{ $company->business_scope }}</div>
          </div>
        </div>
      </div>
    </div>

    <div class="floor">
      <div class="floor-head text-info fs-4 pt-4 pb-1 border-bottom">
        <i class="fa-solid fa-award"></i>
        <span>获得资质</span>
      </div>
      <div class="floor-content">
        <div class="col-md-6 row m-0 px-0 py-2">
          <div class="row m-0 px-0 py-2">
            <div class="col-md-4 ps-0 text-muted">获得资质</div>
            <div class="col-md-8">{{ $company->qualifications }}</div>
          </div>
        </div>
      </div>
    </div>

    <div class="floor">
      <div class="floor-head text-info fs-4 pt-4 pb-1 border-bottom">
        <i class="fa-solid fa-table-columns"></i>
        <span>应用产品</span>
      </div>
      <div class="floor-content"></div>
    </div>

    <div class="floor">
      <div class="floor-head text-info fs-4 pt-4 pb-1 border-bottom">
        <i class="fa-solid fa-table-columns"></i>
        <span>企业服务</span>
      </div>
      <div class="floor-content"></div>
    </div>
  </div>
@stop

@section('scripts')

<script>
  $(document).ready(function() {
    $('.repository-tabs .nav-item .nav-link').click(function(){
      if(!$(this).hasClass('active')) {

        $('.repository-tabs .nav-item .nav-link').removeClass('active');
        $(this).addClass('active');

        // 操作
      }
    })
  })
</script>

@stop
