@extends('layouts.admin')

@section('title','履歷管理')

@section('css')

@endsection

@section('content')

<table id="data-table" class="display">
        <thead>
            <tr>
                <th>姓名</th>
                
                
                <th>住家電話</th>
                <th>電話</th>
                <th>Email</th>

                <th>身高/體重</th>
                
                <th>教育程度</th>
                <th>畢業學校</th>
                
                
                
                <th>-</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
</table>

            

@endsection

@section('js')
<script>
    $(document).ready( function () {
        var table = $('#data-table').DataTable({
            'searching':false,
            "processing": true,
            "serverSide": true,
            'ajax':'/api/getResume',
            columns: [
                { data: 'name' },
                { data: 'tel' },
                { data: 'phone' },
                { data: 'email' },
                { data: null },
                { data: 'edu' },
                { data: 'school' },
                { data: null },
            ],
        });

        table.on( 'draw.dt order.dt search.dt', function () {
            table.column(4, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                let data = table.row(i).data();
                let text = data.height + '/' + data.weight;
                cell.innerHTML = text;
            } );

            table.column(7, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                let data = table.row(i).data();
                cell.innerHTML = `<div class="btn btn-sm btn-info"><a class="text-white" href="/resume/${data.id}" target="_blank">詳細</a></div>`;
            } );

        } );
            
    });
</script>
@endsection