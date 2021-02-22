
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="/open-iconic/font/css/open-iconic.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    @yield('css')


    <title>迪曼人力資源｜@yield('title')</title>

</head>

<body>
    {{-- background-image --}}
    <div class="background">
      <img src="/images/bg-people.png" alt="">
    </div>
    {{-- /background-image --}}
    <div class="cs-btn">
        <a href="http://c109.pop800.com/web800/c.do?n=129431&type=1&url=http%3A%2F%2Fwww.jetly.com.tw%2Fdafang%2Fnews.php%3Ffn%3Ddetail%26amp%3Bid%3D25&l=ct&at=0" target="_blank"><img class="support-img" src="/images/support2.png" alt=""></a>
      </div>
      <div class="top-btn">
        <img src="/images/arrow-up.png" alt="">
      </div>
    {{-- navbar --}}
    {{-- <div style="height:80px;padding:16px;" class="navbar-top">
        <img class="m-0 float-left ml-4" style="height:48px;width:auto;" src="/images/demand.png">
        <h1 class="float-left" style="line-height:48px;margin:0 12px;color:lightgray;">/</h1>
        <img class="m-0 float-left" style="height:48px;width:auto;" src="/images/logo.png">
        <h4 class="m-0 float-right" style="line-height:48px;color:rgba(0,0,0,0.5)">服務電話：03-333-3333</h1>
    </div> --}}
    @if(Request::is('/'))
    <div class="demand-logo">
      <img class="mr-2" style="height:100%;width:auto;" src="/images/dm.png">
      <img class="mr-2" style="height:100%;width:auto;" src="/images/demand.png">
    </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                    
                  <a class="nav-link {{Request::is('/')?'nav-now':'lll'}}" href="/"><span class="oi" data-glyph="home"></span>  公司簡介 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::is('resume/create')?'nav-now':''}}" href="/resume/create"><span class="oi" data-glyph="person"></span>  求職專區</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::is('wanted/create')?'nav-now':''}}" href="/wanted/create"><span class="oi" data-glyph="eye"></span>  企業求才</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::is('location')?'nav-now':''}}" href="/location"><span class="oi" data-glyph="map-marker"></span>  服務據點</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{Request::is('jobbillboard')?'nav-now':''}}" href="/jobbillboard"><span class="oi" data-glyph="menu"></span>  最新職缺</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::is('contact/create')?'nav-now':''}}" href="/contact/create"><span class="oi" data-glyph="envelope-closed"></span>  聯繫我們</a>
                </li>
              </ul>
            </div>
            {{-- <h4 class="m-0 float-right" style="line-height:48px;color:rgba(0,0,0,0.5)">服務電話：03-333-3333</h4> --}}
    </nav>
    {{-- /navbar --}}

    @yield('content')

    <div class="footer" style="padding:40px 0;">
        <div class="container">
          <div class="row pb-4">
            <div class="col-md-3">E-mail：<br>桃園：dafang.ce@gmail.com</div>
            <div class="col-md-3">電話：<br>桃園：(03)-275-6369</div>
            <div class="col-md-3">傳真：<br>桃園：(03)-360-6005</div>
            <div class="col-md-3">地址：<br>桃園市桃園區中正路1090號7樓</div>
          </div>
          <div class="row mt-2">
            <div class="col-md-12" style="text-align:center;">
              <h6 class="m-0">2019 @ All Rights Reserved</h6>
            </div>
          </div>
        </div>
      </div>
  </body>
  
  
  
  {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  @yield('js')
  
  </html>