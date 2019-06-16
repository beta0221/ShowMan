
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    @yield('css')


    <title>庶民生活人力｜@yield('title')</title>

</head>

<body>
    {{-- background-image --}}
    <div class="background">
      <img src="/images/bg3.png" alt="">
    </div>
    {{-- /background-image --}}
    <div class="cs-btn">
        <a href="http://c109.pop800.com/web800/c.do?n=129431&type=1&url=http%3A%2F%2Fwww.jetly.com.tw%2Fdafang%2Fnews.php%3Ffn%3Ddetail%26amp%3Bid%3D25&l=ct&at=0" target="_blank"><img src="/images/support.png" alt=""></a>
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
    <nav class="navbar navbar-expand-lg navbar-light">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link {{Request::is('/')?'nav-now':'lll'}}" href="/">公司簡介 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::is('resume/create')?'nav-now':''}}" href="/resume/create">求職專區</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::is('wanted/create')?'nav-now':''}}" href="/wanted/create">企業求才</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::is('location')?'nav-now':''}}" href="/location">服務據點</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{Request::is('contact/create')?'nav-now':''}}" href="http://c109.pop800.com/web800/c.do?n=129431&type=1&url=http%3A%2F%2Fwww.jetly.com.tw%2Fdafang%2Fnews.php%3Ffn%3Ddetail%26amp%3Bid%3D25&l=ct&at=0" target="_blank">聯繫我們</a>
                </li>
              </ul>
            </div>
    </nav>
    {{-- /navbar --}}

    @yield('content')

    <div class="footer" style="padding:40px 0;">
        <div class="container">
          <div class="row">
            <div class="col-md-3">E-mail：test@email.com</div>
            <div class="col-md-3">電話：(03)-333-3333</div>
            <div class="col-md-3">傳真：(03)-360-6005</div>
            <div class="col-md-3">地址：桃園市桃園區文中路493號4樓</div>
          </div>
          <div class="row">
            <div class="col-md-12" style="text-align:center;">
              <h6 class="m-0">2019 @ All Rights Reserved</h6>
            </div>
          </div>
        </div>
      </div>
  </body>
  
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/main.js"></script>
  @yield('js')
  
  </html>