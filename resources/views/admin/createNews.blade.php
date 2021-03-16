@extends('layouts.admin')

@section('title','新增-最新消息')

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
    <div class="alert alert-warning" role="alert">
        {{session('status')}}
    </div>
@endif



<form class="form-horizontal" action="/admin/news/store" method="POST">
    {{csrf_field()}}

    <!-- Form Name -->
    <div class="col-md-6 offset-md-3 mt-4">
        <legend>新增最新消息</legend>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-6 offset-md-3 control-label" for="textinput">標題</label>
        <div class="col-md-6 offset-md-3">
            <input id="textinput" name="title" type="text" placeholder="標題" class="form-control input-md" required="true">
        </div>
    </div>

    <!-- Check input-->
    
    <div class="form-group">
        <div class="col-md-6 offset-md-3">
            <input id="textinput" name="top" type="checkbox" class="input-md" >
            <label class=" control-label" for="textinput">置頂</label>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-6 offset-md-3 control-label" for="body">詳細內容</label>  
        <div class="col-md-6 offset-md-3">
            <textarea class="form-control" name="body" id="body" style="width:100%;" rows="30"></textarea>
        </div>
    </div>

    <!-- Button -->
    <div class="form-group">
        <div class="col-md-6 offset-md-3">
            <button class="btn btn-success btn-block">確定送出</button>
        </div>
    </div>


</form>

@endsection

@section('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script src="/js/tinymce_init.js"></script>
@endsection