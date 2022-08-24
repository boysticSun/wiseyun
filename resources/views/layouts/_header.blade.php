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
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>
        <li class="nav-item"><a class="nav-link" href="javascript:;">|</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>
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
            <a class="nav-link" href="#">新闻资讯</a>
            <em></em>
          </li>
        </div>
      </ul>
    </div>
  </div>
</nav>
