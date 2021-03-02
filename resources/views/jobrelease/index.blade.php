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
            <th>職缺名稱</th>
            <th>地點</th>
            <th>休假制度</th>
            <th>工作時段</th>
            <th>福利制度</th>
            <th>薪資待遇</th>
            <th>連路電話</th>
            <th>新增日期</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        {{-- @if(count($jobreleases)>0)
            @foreach($jobreleases as $index => $jobrelease)
            <tr class="tr_{{$jobrelease->id}}">

                <td>{{$index+1}}</td>
                <td>{{$jobrelease->name}}</td>
                <td>{{$jobrelease->location}}</td>
                <td>{{$jobrelease->holiday}}</td>
                <td>{{$jobrelease->time}}</td>
                <td>{{$jobrelease->welfare}}</td>
                <td>{{$jobrelease->tel}}</td>
                <td>{{$jobrelease->created_at}}</td>
                <td>
                    <div class="btn btn-sm btn-danger" onclick="deleteJob({{$jobrelease->id}});">
                        刪除
                    </div>
                <a class="btn btn-sm btn-warning" onclick="location.href='/jobrelease/{{$jobrelease->id}}/edit'">
                        編輯
                    </a>
                    <a class="btn btn-sm btn-info" href="/jobrelease/{{$jobrelease->id}}" target="_blank">詳細</a>
                </td>

            </tr>
            @endforeach
        @endif --}}
    </tbody>
</table>


@endsection

@section('js')

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
        });


        table.on( 'draw.dt order.dt search.dt', function () {
            table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            });


            table.column(9, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                let data = table.row(i).data();
                cell.innerHTML = `
                <div class="btn btn-sm btn-danger" onclick="deleteJob(${data.id});">刪除</div>
                <a class="btn btn-sm btn-warning" href='/jobrelease/${data.id}/edit'">編輯</a>
                <a class="btn btn-sm btn-info" href="/jobrelease/${data.id}" target="_blank">詳細</a>
                `;
            });

                
                
                
        });

        $.ajaxSetup({
  			headers: {
    			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  			}
		});
    });

    function deleteJob(id){
        $.ajax({
            type: "POST",
            url: "/api/deleteJob",
            data: {
                id:id
            },
            dataType: "json",
            success: function (res) {
                if(res.s==1){
                    window.location.reload();
                }
            },
        });
    }
</script>
@endsection