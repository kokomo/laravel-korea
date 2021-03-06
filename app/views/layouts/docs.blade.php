<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>Laravel Korea</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
  	<meta name="keywords" content="">
    <meta name="author" content="">
  	<meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Le styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tomorrow-night-eighties.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.css') }}" rel="stylesheet">
  </head>

  <body>

    @include('layouts.includes.nav')

    <div class="container">
    
      <div class="page-header">
        <h1>한글 매뉴얼</h1>
      </div>
      
      <div class="row doc-index">
      
        <div class="span3 aside">
          <div class="well well-small">
            <ul class="nav nav-list">
              <li class="nav-header">머리말(Predface)</li>
              <li {{ Request::is('docs/introduction') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/introduction') }}"><i class="icon-ok pull-right"></i>소개(Introduction)</a></li>
              <li {{ Request::is('docs/contributing') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/contributing') }}"><i class="icon-ok pull-right"></i>기여(contributing)</a></li>
              <li class="nav-header">시작하기(Getting Started)</li>
              <li {{ Request::is('docs/installation') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/installation') }}"><i class="icon-ok pull-right"></i>설치(Installation)</a></li>
              <li {{ Request::is('docs/configuration') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/configuration') }}"><i class="icon-ok pull-right"></i>설정(configuration)</a></li>
              <li {{ Request::is('docs/lifecycle') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/lifecycle') }}"><i class="icon-ok pull-right"></i>요청 사이클(Request Lifecycle)</a></li>
              <li {{ Request::is('docs/routing') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/routing') }}"><i class="icon-ok pull-right"></i>라우팅(Routing)</a></li>
              <li {{ Request::is('docs/requests') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/requests') }}"><i class="icon-ok pull-right"></i>요청 &amp; 입력(Requests &amp; Input)</a></li>
              <li {{ Request::is('docs/responses') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/responses') }}"><i class="icon-ok pull-right"></i>뷰 &amp; 응답(Views &amp; Responses)</a></li>
              <li {{ Request::is('docs/controllers') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/controllers') }}"><i class="icon-ok pull-right"></i>컨트롤러(Controllers)</a></li>
              <li {{ Request::is('docs/errors') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/errors') }}"><i class="icon-ok pull-right"></i>에러 &amp; 로그(Errors &amp; Logging)</a></li>
              <li class="nav-header">더 배우기(Learning More)</li>
              <li {{ Request::is('docs/cache') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/cache') }}"><i class="icon-ok pull-right"></i>캐싱(Cache)</a></li>
              <li {{ Request::is('docs/events') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/events') }}"><i class="icon-ok pull-right"></i>이벤트(Events)</a></li>
              <li {{ Request::is('docs/ioc') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/ioc') }}">IoC 컨테이너(IoC Container)</a></li>
              <li {{ Request::is('docs/localization') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/localization') }}"><i class="icon-ok pull-right"></i>지역화(Localization)</a></li>
              <li {{ Request::is('docs/mail') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/mail') }}"><i class="icon-ok pull-right"></i>메일(Mail)</a></li>
              <li {{ Request::is('docs/packages') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/packages') }}"><i class="icon-ok pull-right"></i>패키지 개발(Package Development)</a></li>
              <li {{ Request::is('docs/pagination') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/pagination') }}"><i class="icon-ok pull-right"></i>페이지네이션(Pagination)</a></li>
              <li {{ Request::is('docs/queues') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/queues') }}"><i class="icon-ok pull-right"></i>큐(Queues)</a></li>
              <li {{ Request::is('docs/security') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/security') }}"><i class="icon-ok pull-right"></i>보안(Security)</a></li>
              <li {{ Request::is('docs/session') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/session') }}"><i class="icon-ok pull-right"></i>세션(Session)</a></li>
              <li {{ Request::is('docs/template') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/template') }}s"><i class="icon-ok pull-right"></i>템플릿(Templates)</a></li>
              <li {{ Request::is('docs/testing') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/testing') }}"><i class="icon-ok pull-right"></i>유닛 테스팅(Unit Testing)</a></li>
              <li {{ Request::is('docs/validation') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/validation') }}"><i class="icon-ok pull-right"></i>검증(Validation)</a></li>
              <li class="nav-header">데이터베이스(Database)</li>
              <li {{ Request::is('docs/database') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/database') }}"><i class="icon-ok pull-right"></i>기본적인 사용법(Basic Usage)</a></li>
              <li {{ Request::is('docs/queries') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/queries') }}"><i class="icon-ok pull-right"></i>쿼리 빌더(Query Builder)</a></li>
              <li {{ Request::is('docs/eloquent') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/eloquent') }}"><i class="icon-ok pull-right"></i>엘로퀀트 ORM(Eloquent ORM)</a></li>
              <li {{ Request::is('docs/schema') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/schema') }}"><i class="icon-ok pull-right"></i>스키마 빌더(Schema Builder)</a></li>
              <li {{ Request::is('docs/migrations') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/migrations') }}"><i class="icon-ok pull-right"></i>마이그레이션 &amp; 씨딩(Migrations &amp; Seeding)</a></li>
              <li {{ Request::is('docs/redis') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/redis') }}"><i class="icon-ok pull-right"></i>레디스(Redis)</a></li>
              <li class="nav-header">아티즌 CLI(Artisan CLI)</li>
              <li {{ Request::is('docs/artisan') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/artisan') }}"><i class="icon-ok pull-right"></i>개요(Overview)</a></li>
              <li {{ Request::is('docs/commands') ? 'class="active"' : '' }}><a href="{{ URL::to('docs/commands') }}"><i class="icon-ok pull-right"></i>개발(Development)</a></li>
              <li class="nav-header">고급 주제(Advanced Topics)</li>
              <li {{ Request::is('docs/architecture') ? 'class="active"' : '' }}><a href="#">구조(Architecture)</a></li>
            </ul>
          </div>
        </div>
        <div class="span9 section">
          <p class="well">
            문법오류나 오역, 오타를 <a href="https://github.com/thisiskaden/laravel4-docs-korean/issues">이슈</a>에 남겨주시면 확인후 업데이트 하겠습니다. 
          </p>
          @yield('content')
        </div>
      </div>
      
      @include('layouts.includes.footer')

    </div> <!-- /container -->

    @section('scripts')

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '{{ Config::get('site.googleAnalyticsID') }}']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>

    <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/highlight.pack.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    @show

  </body>
</html>
