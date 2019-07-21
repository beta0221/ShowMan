@extends('layouts.main')

@section('title','首頁')

@section('css')
<link rel="stylesheet" href="/css/_index.css">
@endsection
@section('content')

    
    {{-- animation display --}}
    <div class="animation">
      <div style="padding-top:33.33333%">
        <div class="img-box">
            <div class="frame">
              <div style="padding-top :50%;">
                <img src="/images/buttom.png" alt="" id="buttom">
                <img src="/images/main.png" alt="" id="main">
                <img src="/images/me-the.png" alt="" id="methe">
                <img src="/images/people.png" alt="" id="people">
              </div>
            </div>
            {{-- <img src="/images/banner.png" > --}}
        </div>
        
      </div>
      <div class="pointing-down">
        <span>︾</span>
      </div>
    </div>
    {{-- /animation display --}}  
    {{--  --}}
    {{-- introduceing --}}
    {{-- style="background-image:url('/images/hand-shake.png');" --}}
    <div class="introduce-bg" >
    </div>
    <div class="introduce">
      <div class="inbox">
          <h2 class="mb-4" style="color:#fff;">公司簡介</h2>
          <p>基於近年各行產業結構不停變換，企業求才若渴<p>
          <p>坊間人力市場開發之相關公司品質良莠不齊，而公司人才之甄選工作，多由傳統方式代為打理。</p>
          <p>其效果不彰，故成立了迪曼人力資源公司專門為企業及求職者提供一個媒合平台，以期能促成勞、資雙贏。</p>
          <p>迪曼人力資源公司，是一家以『崇法』、『專業』、『熱誠』為核心價值的公司</p>
          <p>從成立至今都秉持著勞基法的精神，最高原則是熱誠和專業，以服務人為本，以安定社會為最高信仰，一路走來始終如一。</p>
          <p>現以“快速”、“簡單”、“有效”的經驗，提供企業需要的人才，協助企業解決“人”的問題</p>
          <p>也以“合情”、“合理”、“合法”提供求職者需要的工作期望。</p>
      </div>
    </div>
    {{-- /introduceing --}}


    {{-- spirit --}}
    <div class="spirit">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <div class="icon-box">
                    <img src="/images/law.png" alt="">
                  </div>
                  <div class="spirit-text"><h3>崇法</h3><h4>LAW-ABIDING</h4></div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                      <img src="/images/professional.png" alt="">
                    </div>
                    <div class="spirit-text"><h3>專業</h3><h4>PROFESSIONAL</h4></div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                      <img src="/images/enthusiasm.png" alt="">
                    </div>
                    <div class="spirit-text"><h3>熱忱</h3><h4>ENTHUSIASM</h4></div>
                </div>
            </div>
            
        </div>
    </div>
    {{-- /spirit --}}


    {{-- services --}}
    <div class="service">

      <div class="container">
        <div class="row">
          <div class="col-md-10 offset-md-1">
              <div class="pb-3" style="">
                  <h2 class="text-white">服務項目</h2>
              </div>
              <div class="service-title">
                  <ul class="m-0" style="list-style-type:none">
                      <li class="show service-btn" service="1">人力派遣</li><li class="service-btn" service="2">代理招募</li><li class="service-btn" service="3">行銷企業顧問</li>
                  </ul>
              </div>
          
              <div>
                <div class="service-display">
                <img id="display-img" src="/images/homeImage/{{$imgDic['service_1']->image}}" style="width:100%;" alt="">
                </div>
              </div>
          </div>
        
        </div>
          
      </div>
    </div>
    {{-- /services --}}

    {{-- gallery --}}
    <div style="">

        <div id="gallery" class="cf">
            @for ($i = 1; $i <= 8; $i++)
            <a href="#" class="gallery-slide">
              <img src="/images/homeImage/{{$imgDic['wall_image_' . $i]->image}}">
              {{-- <div class="gallery-caption"> --}}
                {{-- <h2>Test Image</h2> --}}
              {{-- </div> --}}
            </a>
            @endfor
            
            
          </div>
  
      </div>
      {{-- /gallery --}}

    {{-- map --}}
    <div class="map">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h4 style="">桃園總公司</h4>
            <div style="height:400px;background-color:lightgray;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d904.0415414602588!2d121.28148032919778!3d24.99446909899943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681f6dad9501cb%3A0x76ecc59ac3a3e10!2zMzMw5qGD5ZyS5biC5qGD5ZyS5Y2A5paH5Lit6LevNDkz6Jmf!5e0!3m2!1szh-TW!2stw!4v1560068979769!5m2!1szh-TW!2stw" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-6 second-map">
              <h4>竹北辦事處</h4>
              <div style="height:400px;background-color:lightgray;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2088.196397447059!2d121.0159120288189!3d24.836596999291537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346836c23a91cc79%3A0x7a5c5d1ce5bc8879!2zMzAy5paw56u557ij56u55YyX5biC5paH5piO6KGXNTnomZ8!5e0!3m2!1szh-TW!2stw!4v1561299399948!5m2!1szh-TW!2stw" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
          </div>
        </div>
      </div>
    </div>
    {{-- /map --}}
@endsection
    
    

@section('js')
  {{-- <script src="/js/parallax.min.js"></script> --}}
  <script>
    var service_1 = '{{$imgDic['service_1']->image}}';
    var service_2 = '{{$imgDic['service_2']->image}}';
    var service_3 = '{{$imgDic['service_3']->image}}';
  </script>
  <script src="/js/_index.js"></script>

@endsection