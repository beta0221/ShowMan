@extends('layouts.admin')

@section('title','新增最新職缺')

@section('css')

@endsection

@section('content')
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
    <form class="form-horizontal" action="/jobrelease" method="POST">
    {{csrf_field()}}
    <fieldset>
    
    <!-- Form Name -->
    <legend>新增最新職缺</legend>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">地點</label>  
      <div class="col-md-4">
      <input id="textinput" name="location" type="text" placeholder="地點" class="form-control input-md" required="true">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">職缺名稱</label>  
        <div class="col-md-4">
        <input id="textinput" name="name" type="text" placeholder="職缺名稱" class="form-control input-md" required="true">
          
        </div>
      </div>

      <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">休假制度</label>  
        <div class="col-md-4">
        <input id="textinput" name="holiday" type="text" placeholder="休假制度" class="form-control input-md" required="true">
          
        </div>
      </div>
    
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">工作時段</label>  
        <div class="col-md-4">
        <input id="textinput" name="time" type="text" placeholder="工作時段" class="form-control input-md" required="true">
          
        </div>
      </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="sdf">福利制度</label>  
        <div class="col-md-4">
        <input id="sdf" name="welfare" type="text" placeholder="福利制度" class="form-control input-md" required="true">
        
        </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="dsf">聯絡電話</label>  
      <div class="col-md-4">
      <input id="dsf" name="tel" type="text" placeholder="聯絡電話" class="form-control input-md" required="true">
        
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
        <div class="col-md-4">
          <button id="singlebutton" class="btn btn-success btn-block">確定送出</button>
        </div>
      </div>
      
    </fieldset>
    </form>
    

@endsection

@section('js')

@endsection