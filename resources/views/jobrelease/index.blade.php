@extends('layouts.admin')

@section('title','最新職缺')

@section('css')

@endsection

@section('content')
<a class="btn btn-sm btn-success" href="/jobrelease/create">新增</a>
<table id="data-table" class="display" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>地點</th>
            <th>職缺名稱</th>
            <th>休假制度</th>
            <th>工作時段</th>
            <th>福利制度</th>
            <th>連路電話</th>
            <th>新增日期</th>
            {{-- <th>-</th> --}}
        </tr>
    </thead>
    <tbody>
        
    </tbody>
</table>


@endsection

@section('js')

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