@extends('layouts.main')

@section('title','最新消息')

@section('css')

<style>

</style>

@endsection

@section('content')
<div class="container" style="min-height: 680px">

    <div class="row mt-4">
        <div class="col-md-12">
            <h2 class="text-dark">最新消息</h2>
        </div>
    </div>

    <div class="row mt-2 mb-2">
        <div class="col-md-12">



            <table class="table table-light">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">日期</th>
                        <th scope="col">消息標題</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsList as $i => $news)
                    <tr>
                        <th style="width: 10%;min-width:24px" scope="row">{{$i + 1}}</th>
                        <td style="width: 15%;min-width:48px;color:gray">{{$news->date}}</td>
                        <td>
                            @if ($news->top)
                            <span style="color: orange" class="oi" data-glyph="star"></span>
                            @endif
                            
                            <a style="text-decoration: none" class="text-primary" href="/news/{{$news->slug}}">{{$news->title}}</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>


    <div class="row mt-2 mb-4">
        <div class="col-md-12">
            {{$newsList->links()}}
        </div>
    </div>


</div>





@endsection

@section('js')

@endsection