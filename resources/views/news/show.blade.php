@extends('layouts.main')

@section('title','最新消息')

@section('css')

<style>
body{
    background-color: rgba(0,0,0,0.8);
    color: #fff;
}
</style>

@endsection

@section('content')
<div class="container" style="min-height: 680px">

    <div class="row mt-4 mb-2">
        <div class="col-md-12">
            <a href="/news">
                <button class="btn btn-info">回目錄</button>
            </a>
            <h2 class="text-white mt-4">最新消息-{{$news->title}}</h2>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-12" style="color:darkgray">
            建立時間：{{$news->created_at}}<br>
            更新時間：{{$news->updated_at}}
        </div>
    </div>

    <hr class="m-0">

    <div class="row">
        <div class="col-md-12">
            <p>{!!$news->body!!}</p>
        </div>
    </div>

</div>
@endsection

@section('js')

@endsection