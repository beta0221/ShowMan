@extends('layouts.main')

@section('title','求職專區')

@section('css')
<link rel="stylesheet" href="/css/resume_create.css">
<link rel="stylesheet" href="/css/validate.css">
@endsection

@section('content')
<div class="outter">

        
        
    <div class="container">

        <div class="row mb-4 banner">
            <div class="col-md-8 offset-md-2">
                <img src="/images/1463.png" alt="">
                <h1>求職專區</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                    <form id="validate_form" method="POST" action="/resume">
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

                            
                            <h3>個人基本資料</h3>
                            <hr>
                                <div class="form-group">
                                    <label class=" control-label" for="name">姓名<font color="red">＊</font></label>  
                                    <div class="">
                                        <input id="name" name="name" type="text" placeholder="姓名" class="form-control input-md" required="true">
                                    </div>
                                  </div>
                                  <!-- Select Basic -->
                                  <div class="form-group">
                                        <label class=" control-label" for="gender">性別<font color="red">＊</font></label>
                                        <div class="">
                                          <select id="gender" name="gender" class="form-control" required>
                                            <option value="1">男</option>
                                            <option value="0">女</option>
                                          </select>
                                        </div>
                                      </div>
                                  
                                      <div class="form-group">
                                            <label class=" control-label" for="birthday">出生日期<font color="red">＊</font></label>  
                                            <div class="">
                                                <input id="birthday" name="birthday" type="date" placeholder="出生日期" class="form-control input-md" required="true">
                                            </div>
                                          </div>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class=" control-label" for="tel">住家電話<font color="red">＊</font></label>  
                                        <div class="">
                                        <input id="tel" name="tel" type="text" placeholder="住家電話" class="form-control input-md" required="ture">
                                        </div>
                                      </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class=" control-label" for="phone">行動電話<font color="red">＊</font></label>  
                                        <div class="">
                                        <input id="phone" name="phone" type="text" placeholder="行動電話" class="form-control input-md" required="ture">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                  <div class="form-group">
                                        <label class=" control-label" for="email">E-mail<font color="red">＊</font></label>  
                                        <div class="">
                                        <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="true" email="true">
                                        </div>
                                      </div>
                                    <!-- Text input-->
                                  <div class="form-group">
                                        <label class=" control-label" for="height">身高<font color="red">＊</font></label>  
                                        <div class="">
                                        <input id="height" name="height" type="number" placeholder="身高" class="form-control input-md" required="ture">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                  <div class="form-group">
                                        <label class=" control-label" for="weight">體重<font color="red">＊</font></label>  
                                        <div class="">
                                        <input id="weight" name="weight" type="number" placeholder="體重" class="form-control input-md" required="ture">
                                        </div>
                                      </div>
                                      <!-- Text input-->
                                  <div class="form-group">
                                        <label class=" control-label" for="address">地址<font color="red">＊</font></label>  
                                        <div class="">
                                        <input id="address" name="address" type="text" placeholder="地址" class="form-control input-md" required="">
                                        </div>
                                      </div>
                                <h3 class="mt-4">教育程度</h3>
                                <hr>

                                <!-- Select Basic -->
                                <div class="form-group">
                                        <label class=" control-label" for="edu">教育程度<font color="red">＊</font></label>
                                        <div class="">
                                          <select id="edu" name="edu" class="form-control" required>
                                            <option value="國小">國小</option>
                                            <option value="國中">國中</option>
                                            <option value="高中">高中</option>
                                            <option value="大學">大學</option>
                                            <option value="碩士">碩士</option>
                                          </select>
                                        </div>
                                      </div>


                                      
                                      <!-- Text input-->
                                  <div class="form-group">
                                        <label class=" control-label" for="school">畢業學校<font color="red">＊</font></label>  
                                        <div class="">
                                        <input id="school" name="school" type="text" placeholder="畢業學校" class="form-control input-md" required="ture">
                                        </div>
                                      </div>


                                  <h3 class="mt-4">工作經歷</h3>
                                  <hr>
                                  <!-- Textarea -->
                                  <div class="form-group">
                                    <label class=" control-label" for="experience">工作經歷說明</label>
                                    <div class="">                     
                                      <textarea class="form-control" id="experience" name="experience" rows="5"></textarea>
                                    </div>
                                  </div>

                                  <h3 class="mt-4">專業技能</h3>
                                  <hr>
                                  <!-- Textarea -->
                                  <div class="form-group">
                                        <label class=" control-label" for="skill">證照</label>
                                        <div class="">                     
                                          <textarea class="form-control" id="skill" name="skill" rows="5"></textarea>
                                        </div>
                                    </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class=" control-label" for="about">基本資料</label>
                                    <div class="">                     
                                        <textarea class="form-control" id="about" name="about" rows="5"></textarea>
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
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
<script src="/js/validate.js"></script>
<script src="/js/resume_create.js"></script>
@endsection