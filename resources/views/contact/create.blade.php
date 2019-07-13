@extends('layouts.main')

@section('title','聯絡我們')

@section('css')
<link rel="stylesheet" href="/css/contact_create.css">
<link rel="stylesheet" href="/css/validate.css">
@endsection

@section('content')
<div class="outter">

        
        
    <div class="container">
        <div class="row mb-4 banner">
            <div class="col-md-8 offset-md-2">
                <img src="/images/1463.png" alt="">
                <h1>聯絡我們</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 offset-md-2">
                    <form id="validate_form" method="POST" action="/contact">
                        {{ csrf_field() }}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{session('status')}}
                            </div>
                        @endif

                        <hr>
                        <div class="form-group">
                            <label class=" control-label" for="name">姓名<font color="red">＊</font></label>  
                            <div class="">
                            <input id="name" name="name" type="text" placeholder="姓名" class="form-control input-md" required="true" maxlength="8" minlength="8">
                              
                            </div>
                          </div>
                          
                          <!-- Text input-->
                          <div class="form-group">
                            <label class=" control-label" for="phone">聯絡電話<font color="red">＊</font></label>  
                            <div class="">
                            <input id="phone" name="phone" type="text" placeholder="聯絡電話" class="form-control input-md" required="">
                              
                            </div>
                          </div>
                          
                          <!-- Text input-->
                          <div class="form-group">
                            <label class=" control-label" for="email">E-mail<font color="red">＊</font></label>  
                            <div class="">
                            <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="true" email="true">
                              
                            </div>
                          </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class=" control-label" for="message">留言</label>
                            <div class="">                     
                                <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-secondary btn-block mt-4"">送出</button>
                    </form>

            </div>
        </div>
    </div>
    
</div>
@endsection

@section('js')
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/contact_create.js"></script>
@endsection