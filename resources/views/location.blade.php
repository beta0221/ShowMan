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
            <div class="col-md-12">
              <h4 style="">桃園總公司</h4>
              <div style="height:400px;background-color:lightgray;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.5657818478467!2d121.29724021499909!3d25.01486648398124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681fb0318e172f%3A0x5e961f21d938949f!2zMzMw5qGD5ZyS5biC5qGD5ZyS5Y2A5Lit5q2j6LevMTA5MOiZnzc!5e0!3m2!1szh-TW!2stw!4v1613971168048!5m2!1szh-TW!2stw" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </div>
            {{-- <div class="col-md-6">
                <h4>竹北辦事處</h4>
                <div style="height:400px;background-color:lightgray;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2088.196397447059!2d121.0159120288189!3d24.836596999291537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346836c23a91cc79%3A0x7a5c5d1ce5bc8879!2zMzAy5paw56u557ij56u55YyX5biC5paH5piO6KGXNTnomZ8!5e0!3m2!1szh-TW!2stw!4v1561299399948!5m2!1szh-TW!2stw" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div> --}}
          </div>
        </div>
      </div>
      {{-- /map --}}
</div>
@endsection

@section('js')

@endsection