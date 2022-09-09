@extends('layouts.app')
@section('title', '首页')

@section('banner')
  <!-- Swiper -->
  <div class="swiper bannerSwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="banner-item" style="background: url('/images/banner.jpg');"></div>
      </div>
      <div class="swiper-slide">
        <div class="banner-item" style="background: url('/images/banner.jpg');"></div>
      </div>
      <div class="swiper-slide">
        <div class="banner-item" style="background: url('/images/banner.jpg');"></div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
@stop

@section('statistics')
  <div class="row root-statistics">
    <div class="col-md-4 root-statistics-item">
      <i class="fas fa-cloud fa-3x col-md-3"></i>
      <span class="col-md-9">上云应用<b>100+</b>个</span>
    </div>
    <div class="col-md-4 root-statistics-item">
      <i class="fas fa-building fa-3x col-md-3"></i>
      <span class="col-md-9">入驻企业<b>100+</b>户</span>
    </div>
    <div class="col-md-4 root-statistics-item">
      <i class="fas fa-suitcase fa-3x col-md-3"></i>
      <span class="col-md-9">服务商<b>100+</b>家</span>
    </div>
  </div>
@stop

@section('content')
  <div class="row root-floor-fst">
    <div class="col-md-6 root-floor-item floor-item-left">
      <div class="root-register-route row">
        <div class="col-md-7">&nbsp;</div>
        <div class="col-md-5">
          <div class="title">
            <b>成为服务商</b>
          </div>
          <div class="desc">
            <span>获得绝佳品牌推广机会</span>
          </div>
          <a class="btn" href="{{ route('register') }}">服务商入驻 >></a>
        </div>
      </div>
    </div>
    <div class="col-md-6 root-floor-item floor-item-right">
      <div class="root-register-route row">
        <div class="col-md-7">&nbsp;</div>
        <div class="col-md-5">
          <div class="title">
            <b>注册用户</b>
          </div>
          <div class="desc">
            <span>寻找更加适合的服务商</span>
          </div>
          <a class="btn" href="{{ route('register') }}">用户注册 >></a>
        </div>
      </div>
    </div>
    <h2>智慧wise产品及方案</h2>
    <div class="plans-column">
      <div class="row">
        <div class="col-md-3">
          <div class="plans-column-item">
            <div>
              <i class="fas fa-cog fa-2x"></i>
            </div>
            <div>
              <b>生产制造</b>
            </div>
          </div>
          <div class="plans-column-item">
            <div>
              <i class="fas fa-rss fa-2x"></i>
            </div>
            <div>
              <b>工业物联网平台</b>
            </div>
          </div>
          <div class="plans-column-hover">
            <div>
              <b>生产制造</b>
            </div>
            <div class="desc">生产全流程管控，生产多维度多层次分析，数字化精益指导</div>
            <div class="links">
              <a href="#">生产过程管控 ></a>
            </div>
            <div class="links">
              <a href="#">设备物联 ></a>
            </div>
            <div class="links">
              <a href="#">能源管理 ></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="plans-column-item">
            <div>
              <i class="fas fa-shopping-bag fa-2x"></i>
            </div>
            <div>
              <b>协调采购</b>
            </div>
          </div>
          <div class="plans-column-item">
            <div>
              <i class="fas fa-tasks fa-2x"></i>
            </div>
            <div>
              <b>经营管理</b>
            </div>
          </div>
          <div class="plans-column-hover">
            <div>
              <b>协调采购</b>
            </div>
            <div class="desc">快速响应，精准交付，在线交互高效协同</div>
            <div class="links">
              <a href="#">工业品定制 ></a>
            </div>
            <div class="links">
              <a href="#">硬件定制 ></a>
            </div>
            <div class="links">
              <a href="#">能源管理 ></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="plans-column-item">
            <div>
              <i class="fas fa-truck fa-2x"></i>
            </div>
            <div>
              <b>仓储物流</b>
            </div>
          </div>
          <div class="plans-column-item">
            <div>
              <i class="fas fa-line-chart fa-2x"></i>
            </div>
            <div>
              <b>市场营销</b>
            </div>
          </div>
          <div class="plans-column-hover">
            <div>
              <b>市场营销</b>
            </div>
            <div class="desc">数字化集成、可视化管理，库存精准定位、自动同步、出入库监控、库存统计</div>
            <div class="links">
              <a href="#">推广展示 ></a>
            </div>
            <div class="links">
              <a href="#">售后服务 ></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="plans-column-item">
            <div>
              <i class="fas fa-desktop fa-2x"></i>
            </div>
            <div>
              <b>信息技术服务</b>
            </div>
          </div>
          <div class="plans-column-item">
            <div>
              <i class="fas fa-comment fa-2x"></i>
            </div>
            <div>
              <b>制作咨询与服务</b>
            </div>
          </div>
          <div class="plans-column-hover">
            <div>
              <b>信息技术服务</b>
            </div>
            <div class="desc">保持数字化转型目标与企业生产业务目标一致，有效的支持生产发展战略</div>
            <div class="links">
              <a href="#">数据采集存储 ></a>
            </div>
            <div class="links">
              <a href="#">系统应用与集成 ></a>
            </div>
            <div class="links">
              <a href="#">信息安全 ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop

@section('cloudindex')
  <div class="container root-cloud-index">
    <div class="cloud-index-left">
      <div>
        <i class="fas fa-cloud fa-5x"></i>
      </div>
      <div class="title">
        企业上云指数
      </div>
      <div class="en-title">
        Enterprise Cloud
      </div>
    </div>
    <div class="cloud-index-right">
      <div class="cloud-stars">
        <div class="row">
          <div class="col-md-3 cloud-stars-item">
            <a href="#">
              <div class="star">一星</div>
              <div class="title">工具上云</div>
              <div class="desc">企业使用工业互联网平台的工业APP软件</div>
            </a>
            <em></em>
          </div>
          <div class="col-md-3 cloud-stars-item">
            <a href="#">
              <div class="star">二星</div>
              <div class="title">管理上云</div>
              <div class="desc">企业使用工业互联网平台云化软件</div>
            </a>
            <em></em>
          </div>
          <div class="col-md-3 cloud-stars-item">
            <a href="#">
              <div class="star">三星</div>
              <div class="title">设备上云</div>
              <div class="desc">企业将设备生产数据接入平台，通过平台实现生产管理</div>
            </a>
            <em></em>
          </div>
          <div class="col-md-3 cloud-stars-item">
            <a href="#">
              <div class="star">四星</div>
              <div class="title">业务上云</div>
              <div class="desc">企业通过工业互联网平台开展关键核心业务，实现业务流程再造和组织模式创新</div>
            </a>
          </div>
        </div>
      </div>
      <div class="cloud-list">

      </div>
    </div>
  </div>
  <h2>云产品展示</h2>
  <div class="container root-products">
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
    <div class="products-item">
      <div class="logo">
        <a href="#">
          <img src="/images/logo.png">
        </a>
      </div>
      <div class="title"><a href="#">云产品名称云产品名称云产品名称云产品名称云产品名称</a></div>
      <div class="desc">云产品简介云产品简介云产品简介云产品简介云产品简介</div>
    </div>
  </div>
@stop

@section('news')
  <div class="root-news">
    <h2>资讯洞察</h2>
    <div class="container">
      <div class="root-news-left">
        <div class="title">
          <h5>
            <a href="#">
              <span>最新资讯</span>
              <span class="title-new">new</span>
            </a>
          </h5>
        </div>
        <div class="news-slide">
          <!-- Swiper -->
          <div class="swiper newsSwiper">
            <div class="swiper-wrapper">
              @foreach ($lastnews as $last)
              <div class="swiper-slide">
                <div class="news-slide-item" style="background: url('{{ $last->thumb }}');">
                  <a href="{{ route('news.show', [$last->id]) }}">
                    <div class="slide-title">{{ $last->title }}</div>
                  </a>
                </div>
              </div>
              @endforeach
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
      <div class="root-news-right">
        <div class="news-tabs">
          <ul class="nav nav-pills">
            @foreach ($categories as $key => $cateitem)
            <li class="nav-item">
              <a class="nav-link @if($key == 0)active @endif" data-bs-toggle="pill" data-bs-target="#news-cate-{{ $cateitem->id }}" href="javascript:;">
                <span>{{ $cateitem->name }}</span>
                <em></em>
              </a>
            </li>
            @endforeach
          </ul>
          <div class="tab-content">
            @foreach ($categories as $k => $item)
            <div class="tab-pane @if($k == 0)active @endif" id="news-cate-{{$item->id}}">
              @foreach ($item->children as $newsitem)
              <div class="news-list-item">
                <a href="{{ route('news.show', [$newsitem->id]) }}">
                  <div class="row">
                    <div class="news-item-left col-md-10">{{ $newsitem->title }}</div>
                    <div class="news-item-right col-md-2">{{ $newsitem->created_at->toDateString() }}</div>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <a class="more" href="{{ route('news.index', 1) }}">查看更多 >></a>
  </div>
@stop
