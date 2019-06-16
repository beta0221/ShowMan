@extends('layouts.main')

@section('title','企業求才')

@section('css')
<link rel="stylesheet" href="/css/wanted_create.css">
<link rel="stylesheet" href="/css/validate.css">
@endsection

@section('content')
<div class="outter">

        
        
    <div class="container">
        <div class="row mb-4 banner">
            <div class="col-md-8 offset-md-2">
                <img src="/images/1463.png" alt="">
                <h1>企業求才</h1>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 offset-md-2">
                    <form id="validate_form" method="POST" action="/wanted">
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

                            <h2>基本資料</h2>
                            <hr>
                                <div class="form-group">
                                    <label class=" control-label" for="company_id">統一編號</label>  
                                    <div class="">
                                    <input id="company_id" name="company_id" type="text" placeholder="統一編號" class="form-control input-md" required="true" maxlength="8" minlength="8">
                                      
                                    </div>
                                  </div>
                                  
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class=" control-label" for="company_name">公司名稱</label>  
                                    <div class="">
                                    <input id="company_name" name="company_name" type="text" placeholder="公司名稱" class="form-control input-md" required="ture">
                                      
                                    </div>
                                  </div>
                                  
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class=" control-label" for="contact_name">聯絡人</label>  
                                    <div class="">
                                    <input id="contact_name" name="contact_name" type="text" placeholder="聯絡人" class="form-control input-md" required="">
                                      
                                    </div>
                                  </div>
                                  
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class=" control-label" for="fax">傳真</label>  
                                    <div class="">
                                    <input id="fax" name="fax" type="text" placeholder="傳真" class="form-control input-md" required>
                                      
                                    </div>
                                  </div>
                                  
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class=" control-label" for="contact_phone">聯絡電話</label>  
                                    <div class="">
                                    <input id="contact_phone" name="contact_phone" type="text" placeholder="聯絡電話" class="form-control input-md" required="">
                                      
                                    </div>
                                  </div>
                                  
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class=" control-label" for="email">E-mail</label>  
                                    <div class="">
                                    <input id="email" name="email" type="text" placeholder="E-mail" class="form-control input-md" required="true" email="true">
                                      
                                    </div>
                                  </div>
                                  
                                  <!-- Text input-->
                                  <div class="form-group">
                                    <label class=" control-label" for="address">公司地址</label>  
                                    <div class="">
                                    <input id="address" name="address" type="text" placeholder="公司地址" class="form-control input-md" required="">
                                      
                                    </div>
                                  </div>

                                  <h2>求才需求</h2>
                                  <hr>
                                  
                                  <!-- Select Basic -->
                                  <div class="form-group">
                                    <label class=" control-label" for="wanted_cat">服務項目</label>
                                    <div class="">
                                      <select id="wanted_cat" name="wanted_cat" class="form-control" required>
                                        <option value="高階人力派遣">高階人力派遣</option>
                                        <option value="人力派遣">人力派遣</option>
                                        <option value="薪資委外服務">薪資委外服務</option>
                                        <option value="員工轉職輔導">員工轉職輔導</option>
                                      </select>
                                    </div>
                                  </div>
                                  
                                  <!-- Textarea -->
                                  <div class="form-group">
                                    <label class=" control-label" for="content">求才需求說明</label>
                                    <div class="">                     
                                      <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                                    </div>
                                  </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class=" control-label" for="other">其他服務需求</label>
                                    <div class="">                     
                                        <textarea class="form-control" id="other" name="other" rows="5"></textarea>
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
<script src="/js/wanted_create.js"></script>
@endsection