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
                        <th>福利制度</th>
                        <th>薪資待遇</th>
                        <th>聯絡電話</th>
                        <th>新增日期</th>
                        <th>-</th>

                    </tr>
                </thead>
            </table>

        </div>
    </div>
</div>





@endsection

@section('js')
<script src="/js/datatables.min.js"></script>
{{-- <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/datatables.min.js"></script> --}}
<script>
    $(document).ready(function() {

        var table = $('#data-table').DataTable({
            'searching':false,
            "processing": true,
            "serverSide": true,
            'ajax':'/api/getJobList',
            columns: [
                { data: null },
                { data: 'location' },
                { data: 'name' },
                { data: 'holiday' },
                { data: 'time' },
                { data: 'welfare' },
                { data: 'salary' },
                { data: 'tel' },
                { data: 'created_at' },
                { data: null },
            ],
            "columnDefs": [
                {
                    "targets": -1,
                    "data": null,
                    "defaultContent": `<button class="btn btn-sm btn-info">詳細</button>`
                },
            ]
        });


        $('#data-table tbody').on( 'click', 'button', function () {
            var data = table.row( $(this).parents('tr') ).data();
            location.href=`/jobrelease/${data.id}`;
        } );

        table.on( 'draw.dt order.dt search.dt', function () {
            table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } );


    });


</script>
@endsection