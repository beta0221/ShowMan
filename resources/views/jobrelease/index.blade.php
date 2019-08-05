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
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        @if(count($jobreleases)>0)
            @foreach($jobreleases as $index => $jobrelease)
            <tr class="tr_{{$jobrelease->id}}">

                <td>{{$index}}</td>
                <td>{{$jobrelease->location}}</td>
                <td>{{$jobrelease->name}}</td>
                <td>{{$jobrelease->holiday}}</td>
                <td>{{$jobrelease->time}}</td>
                <td>{{$jobrelease->welfare}}</td>
                <td>{{$jobrelease->tel}}</td>
                <td>{{$jobrelease->created_at}}</td>
                <td>
                    <div class="btn btn-sm btn-danger" onclick="deleteJob({{$jobrelease->id}});">
                        刪除
                    </div>
                    <a class="btn btn-sm btn-warning">
                        編輯
                    </a>
                    <a class="btn btn-sm btn-info" href="#">詳細</a>
                </td>

            </tr>
            @endforeach
        @endif
    </tbody>
</table>


@endsection

@section('js')

<script>
    $(document).ready(function() {
        $('#data-table').DataTable();

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
                    $('.tr_'+id).remove();
                }
            },
        });
    }
</script>
@endsection