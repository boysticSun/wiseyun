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
        <li class="nav-item"><a class="nav-link" href="#">帮助中心</a></li>
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
            <a class="nav-link" href="#">应用软件市场</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="#">特色云市场</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="#">标识解析</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="#">需求市场</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="#">资源库</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="#">平台服务</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="#">政策解读</a>
            <em></em>
          </li>
          <li class="navbar-brand nav-item">
            <a class="nav-link" href="{{ route('news.index') }}">新闻资讯</a>
            <em></em>
          </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
