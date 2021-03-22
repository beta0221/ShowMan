@extends('layouts.main')

@section('title','最新職缺')

@section('css')
<link rel="stylesheet" href="/css/datatables.min.css">
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/datatables.min.css"/> --}}

<style>
#data-table .table-index-th{
    max-width:32px;
}
</style>

@endsection

@section('content')
<div class="container pt-4 pb-4" style="min-height:600px;">

    <div class="row mt-4">
        <div class="col-md-12">
            <h2 class="text-dark">最新職缺</h2>
        </div>
    </div>


    <div class="row mt-2 mb-2">
        <div class="col-md-12">
            

            <table class="table table-light w-100">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th class="text-center" scope="col">職缺與地點</th>
                        <th class="text-center" scope="col">薪資待遇</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobList as $i => $job)
                    <tr>
                        <th style="width: 10%;min-width:24px" scope="row">{{$i + 1}}</th>
                        <td style="width: 60%;min-width:48px;color:gray" class="text-center">
                            <a href="/jobrelease/{{$job->id}}">{{$job->location}}<br>{{$job->name}}</a>
                        </td>
                        <td class="text-center">
                            <span>{{$job->salary}}</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>

    <div class="row mt-2 mb-4">
        <div class="col-md-12">
            {{$jobList->links()}}
        </div>
    </div>


</div>





@endsection

@section('js')


@endsection