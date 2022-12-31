
<!doctype html>
<html lang="ar" dir="rtl" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>KKUtr</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">

    

    

<link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/kkutr.svg') }}">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.3/examples/cover/cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class=" float-md-end mb-0"><img src="{{ asset('images/kkutr.svg') }}" width="50" height="50" alt=""></h3>
      <nav class="nav nav-masthead justify-content-center float-md-start">
        @guest
            @if (Route::has('login'))
                <a class="nav-link fw-bold py-1 " href="{{ route('login') }}">دخول</a>
            @endif
            @if (Route::has('register'))
                <a class="nav-link fw-bold py-1 px-0" href="{{ route('register') }}">تسجيل</a>
            @endif
       @else
        <a class="" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img style="border-radius: 50%" src="https://itcsvc.kku.edu.sa/KKU_MyKkuWS/UserImage?nickname={{ Auth::user()->username }}" width="30" height="30" alt="user_logo">
      </a>
    
        <ul class="dropdown-menu" style="text-align: right">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li><hr class="dropdown-divider"></li>
          <a type="button" class="dropdown-item text-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            خروج
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
       @endguest
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>KKUtr</h1>
    <p class="lead">تويتر الخاص بجامعة الملك خالد ، وتم انشاء الموقع في معسكر مهارات المستقبل الذي نظمتة الجامعة ، وبطلب من المدرب حسن حسان الشيخ.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-white" onclick="window.location.href='/posts';">المنشورات</a>
    </p>
  </main>

  <footer class="mt-auto text-white-50">
    <p>صنع بحب , من <a href="https://twitter.com/a7sa45" class="text-white">@a7sa45</a>.</p>
  </footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
