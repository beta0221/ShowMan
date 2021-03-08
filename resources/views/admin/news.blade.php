@extends('layouts.admin')

@section('title','最新消息')

@section('css')

@endsection

@section('content')

<a class="btn btn-sm btn-success" href="/admin/news/create">新增</a>
<table id="data-table" class="display" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>置頂</th>
            <th>標題</th>
            <th>內容</th>
            <th>日期</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

@endsection

@section('js')
<script>
$(document).ready(function() {
    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    var table = $('#data-table').DataTable({
        'searching':false,
        "processing": true,
        "serverSide": true,
        'ajax':'/api/admin/getNews',
        columns: [
            { data: null },
            { data: 'is_top' },
            { data: 'title' },
            { data: 'body' },
            { data: 'created_at' },
            { data: null },
        ],
    });


    table.on( 'draw.dt order.dt search.dt', function () {
        table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        });


        table.column(-1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            let data = table.row(i).data();
            cell.innerHTML = `
            <div class="btn btn-sm btn-danger" onclick="deleteNews('${data.slug}');">刪除</div>
            <a class="btn btn-sm btn-warning" href='/admin/news/${data.slug}/edit'">編輯</a>
            `;
        });
    });

});


function deleteNews(slug){
    if(!confirm('確定刪除？')){ return; }
        $.ajax({
            type: "POST",
            url: "/api/admin/news/"+slug+"/delete",
            data: {},
            dataType: "text",
            success: function (res) {
                window.location.reload();
            },
            error:function(error){
                alert('錯誤');
            }
        });

    }
</script>
@endsection