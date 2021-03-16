@extends('layouts.admin')

@section('title','編輯最新職缺')

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
    <form class="form-horizontal" action="/jobrelease/{{$job->id}}" method="POST">
        {{ method_field('PUT') }}
        {{csrf_field()}}
    <fieldset>
    
    <!-- Form Name -->
    <div class="col-md-6 offset-md-3 mt-4">
      <legend>新增最新職缺</legend>
    </div>
    
    
    

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-6 offset-md-3 control-label" for="textinput">職缺名稱</label>  
        <div class="col-md-6 offset-md-3">
        <input id="textinput" name="name" type="text" placeholder="職缺名稱" class="form-control input-md" required="true" value="{{$job->name}}">
          
        </div>
      </div>

      <!-- Text input-->
    <div class="form-group">
        <label class="col-md-6 offset-md-3 control-label" for="textinput">地點</label>  
        <div class="col-md-6 offset-md-3">
        <input id="textinput" name="location" type="text" placeholder="地點" class="form-control input-md" required="true" value="{{$job->location}}">
          
        </div>
      </div>

      <!-- Text input-->
    <div class="form-group">
        <label class="col-md-6 offset-md-3 control-label" for="textinput">休假制度</label>  
        <div class="col-md-6 offset-md-3">
        <input id="textinput" name="holiday" type="text" placeholder="休假制度" class="form-control input-md" required="true" value="{{$job->holiday}}">
          
        </div>
      </div>
    
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-6 offset-md-3 control-label" for="textinput">工作時段</label>  
        <div class="col-md-6 offset-md-3">
        <input id="textinput" name="time" type="text" placeholder="工作時段" class="form-control input-md" required="true" value="{{$job->time}}">
          
        </div>
      </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-6 offset-md-3 control-label" for="sdf">福利制度</label>  
        <div class="col-md-6 offset-md-3">
        <input id="sdf" name="welfare" type="text" placeholder="福利制度" class="form-control input-md" required="true" value="{{$job->welfare}}">
        
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 offset-md-3 control-label" for="sdf">薪資待遇</label>  
      <div class="col-md-6 offset-md-3">
      <input id="sdf" name="salary" type="text" placeholder="薪資待遇" class="form-control input-md" required="true" value="{{$job->salary}}">
      
      </div>
  </div>
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 offset-md-3 control-label" for="dsf">聯絡電話</label>  
      <div class="col-md-6 offset-md-3">
      <input id="dsf" name="tel" type="text" placeholder="聯絡電話" class="form-control input-md" required="true" value="{{$job->tel}}">
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-6 offset-md-3 control-label" for="info">詳細內容</label>  
      <div class="col-md-6 offset-md-3">
      <textarea class="form-control" name="info" id="info" style="width:100%;" rows="10">{!!$job->info!!}</textarea>
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
        <div class="col-md-6 offset-md-3">
          <button id="singlebutton" class="btn btn-success btn-block">更新</button>
        </div>
      </div>
      
    </fieldset>
    </form>
    

@endsection

@section('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script src="/js/tinymce_init.js"></script>
@endsection