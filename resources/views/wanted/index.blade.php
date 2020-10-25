@extends('layouts.admin')

@section('title','徵才管理')

@section('css')

@endsection

@section('content')

    <table id="data-table" class="display">
        <thead>
            <tr>
                <th>公司名稱</th>
                <th>統一編號</th>
                <th>聯絡人</th>
                <th>聯絡電話</th>
                <th>信箱</th>
                <th>傳真</th>
                <th>地址</th>
                <th>需求</th>
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
            'ajax':'/api/getWanted',
            columns: [
                { data: 'company_name' },
                { data: 'company_id' },
                { data: 'contact_name' },
                { data: 'contact_phone' },
                { data: 'email' },
                { data: 'fax' },
                { data: 'address' },
                { data: 'wanted_cat' },
                { data: null },
            ],
    });

    table.on( 'draw.dt order.dt search.dt', function () {
        table.column(8, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            let data = table.row(i).data();
            cell.innerHTML = `<div class="btn btn-sm btn-info"><a class="text-white" href="/wanted/${data.id}" target="_blank">詳細</a></div>`;
        });
    });
});
</script>
@endsection