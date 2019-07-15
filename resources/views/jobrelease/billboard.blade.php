@extends('layouts.main')

@section('title','最新職缺')

@section('css')
<link rel="stylesheet" href="/css/datatables.min.css">
{{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/datatables.min.css"/> --}}

<style>
    
</style>

@endsection

@section('content')
<div class="container pt-4 pb-4" style="min-height:600px;">
    <div class="row">
        <div class="col-md-12">
            <table id="data-table" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>地點</th>
                        <th>職缺名稱</th>
                        <th>休假制度</th>
                        <th>工作時段</th>
                        <th>連路電話</th>
                        <th>新增日期</th>
                        {{-- <th>-</th> --}}
                        <th>福利制度</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>

        </div>
    </div>
</div>





@endsection

@section('js')
<script src="/js/datatables.min.js"></script>
{{-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/datatables.min.js"></script> --}}
<script>
    
    $(document).ready( function () {
            $('#data-table').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'GET',
                'ajax': {
                    'url':'/api/getJobRelease',
                    'dataSrc':'aaData',
                },
                'columns': [
                    { data: 'id' },
                    { data: 'location' },
                    { data: 'name' },
                    { data: 'holiday' },
                    { data: 'time' },
                    { data: 'welfare' },
                    { data: 'tel' },
                    { data: 'created_at' },
                ]
            });
    });
</script>
@endsection