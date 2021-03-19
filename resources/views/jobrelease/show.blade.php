@extends('layouts.main')

@section('title','最新職缺-'.$job->name)

@section('css')
<link rel="stylesheet" href="/css/jobrelease_show.css">

@endsection

@section('content')
<div class="outter">

    <div class="container">

        <div class="row mb-4">
            <div class="col-md-8 offset-md-2">
                <div class="btn btn-info" onclick="location.href='/jobbillboard'">回目錄</div>
            </div>
        </div>

        <div class="row mb-4 banner">
            <div class="col-md-8 offset-md-2">
                <img src="/images/1463.png" alt="">
                {{-- <h1>聯絡我們</h1> --}}
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 offset-md-2" style="color:darkgray">
                建立時間：{{$job->created_at}}<br>
                更新時間：{{$job->updated_at}}
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2 text-center job-content">

                <hr>
                

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="textinput">職缺名稱：<span>{{$job->name}}</span></label>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="textinput">地點：<span>{{$job->location}}</span></label>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="textinput">休假制度：<span>{{$job->holiday}}</span></label>
                    
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="textinput">工作時段：<span>{{$job->time}}</span></label>
                    
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="sdf">福利制度：<span>{{$job->welfare}}</span></label>
                    
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="sdf">薪資待遇：<span>{{$job->salary}}</span></label>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-12 control-label" for="dsf">聯絡電話：<span>{{$job->tel}}</span></label>
                    
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="info">詳細內容：</label>
                    <div class="col-md-12">
                        <p>{!!$job->info!!}</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
@endsection

@section('js')
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.js"></script> --}}

@endsection