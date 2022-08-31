<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <a class="navbar-brand " href="{{ url('/') }}">
      <img src="/images/logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav">

      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">帮助中心</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:;">|</a></li>
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
          <li class="nav-item"><a class="nav-link" href="javascript:;" style="line-height: 28px">|</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
        @else
          <li class="nav-item">
            <a class="nav-link font-weight-bold" href="{{ route('news.create') }}" style="line-height: 32px;">
              <i class="fa-solid fa-plus"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="{{ Auth::user()->avatar }}"
                class="img-responsive img-circle" width="30px" height="30px">
              {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">
                <i class="far fa-user mr-2"></i>
                个人中心
              </a>
              <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">
                <i class="far fa-edit mr-2"></i>
                编辑资料
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" id="logout" href="#">
                <form action="{{ route('logout') }}" method="POST" class="row" onsubmit="return confirm('您确定要退出吗？');">
                  {{ csrf_field() }}
                  <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
                </form>
              </a>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-bottom">
  <div class="container">
    <div class="navbar navbar-light" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav">
        <div class="container-fluid">
          <li class="navbar-brand nav-item {{ active_class(if_uri('/')) }}">
            <a class="nav-link" href="/">首页</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="javascript:;">应用软件市场</a>
            <em></em>
            <div class="snd-navbar-brand">
              <div class="snd-navbar-item">
                <div class="snd-navbar-name">企业上云</div>
                <div class="trd-navbar-brand">
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">企业上云</a>
                  </div>
                </div>
              </div>
              <div class="snd-navbar-item">
                <div class="snd-navbar-name">软件服务</div>
                <div class="trd-navbar-brand">
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">软件服务</a>
                  </div>
                </div>
              </div>
              <div class="snd-navbar-item">
                <div class="snd-navbar-name">APP应用</div>
                <div class="trd-navbar-brand">
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">APP应用</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="javascript:;">特色云市场</a>
            <em></em>
            <div class="snd-navbar-brand">
              <div class="snd-navbar-item">
                <div class="snd-navbar-name">云产品</div>
                <div class="trd-navbar-brand">
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">云主机</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">云数据库</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">负载均衡</a>
                  </div>
                </div>
              </div>
              <div class="snd-navbar-item">
                <div class="snd-navbar-name">云安全</div>
                <div class="trd-navbar-brand">
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">风险评估</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">渗透测试</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">代码审计</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">建设整改</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">应急响应</a>
                  </div>
                </div>
              </div>
              <div class="snd-navbar-item">
                <div class="snd-navbar-name">安全产品</div>
                <div class="trd-navbar-brand">
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">云漏扫</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">云备份</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">云防线</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">云监控</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="#">标识解析</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item {{ active_class(if_route('market')) }}">
            <a class="nav-link" href="{{ route('market') }}">需求市场</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="#">资源库</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="javascript:;">平台服务</a>
            <em></em>
            <div class="snd-navbar-brand snd-navbar-brand-2">
              <div class="snd-navbar-item">
                <div class="snd-navbar-name">解决方案</div>
                <div class="trd-navbar-brand">
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">医药制造解决方案</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">汽车发动机制造解决方案</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">机加工行业解决方案</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">煤化工行业解决方案</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">农业畜牧业</a>
                  </div>
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">食品制造</a>
                  </div>
                </div>
              </div>
              <div class="snd-navbar-item">
                <div class="snd-navbar-name">服务场景</div>
                <div class="trd-navbar-brand">
                  <div class="trd-navbar-item">
                    <a class="trd-nav-link" href="#">平台服务</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="navbar-brand nav-item {{ active_class(if_uri('news/list/6')) }}">
            <a class="nav-link" href="{{ route('news.index', 6) }}">政策解读</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item {{ active_class(if_uri('news/list/1')) }}">
            <a class="nav-link" href="{{ route('news.index', 1) }}">新闻资讯</a>
            <em></em>
          </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
