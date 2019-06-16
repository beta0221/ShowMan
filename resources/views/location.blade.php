@extends('layouts.main')

@section('title','服務據點')

@section('css')
<link rel="stylesheet" href="/css/_location.css">
@endsection

@section('content')



<div class="outter">
    {{-- map --}}
    <div class="map" data-parallax="scroll" data-image-src="/images/hand-shake.png" data-z-index="0" data-speed="0.3">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4 style="">Google Map 1</h4>
              <div style="height:400px;background-color:lightgray;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d904.0415414602588!2d121.28148032919778!3d24.99446909899943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681f6dad9501cb%3A0x76ecc59ac3a3e10!2zMzMw5qGD5ZyS5biC5qGD5ZyS5Y2A5paH5Lit6LevNDkz6Jmf!5e0!3m2!1szh-TW!2stw!4v1560068979769!5m2!1szh-TW!2stw" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-6">
                <h4>Google Map 2</h4>
                <div style="height:400px;background-color:lightgray;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d904.0415414602588!2d121.28148032919778!3d24.99446909899943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681f6dad9501cb%3A0x76ecc59ac3a3e10!2zMzMw5qGD5ZyS5biC5qGD5ZyS5Y2A5paH5Lit6LevNDkz6Jmf!5e0!3m2!1szh-TW!2stw!4v1560068979769!5m2!1szh-TW!2stw" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
          </div>
        </div>
      </div>
      {{-- /map --}}
</div>
@endsection

@section('js')

@endsection