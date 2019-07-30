@extends('layouts.admin')

@section('title','訊息管理')

@section('css')

@endsection

@section('content')

<table id="data-table" class="display" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>聯絡電話</th>
            <th>Ｅ-mail</th>
            <th>訊息</th>
            <th>-</th>
        </tr>
    </thead>
    <tbody>
        @if(count($contacts)>0)
            @foreach($contacts as $index => $contact)
            <tr>

                <td>{{$index}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{(strlen($contact->message)>20)?mb_substr($contact->message,0,20).'...':$contact->message}}</td>
                <td>
                    <div class="btn btn-sm btn-info" onclick="getMessage({{$contact->id}});" data-toggle="modal" data-target="#myModal">
                        詳細
                    </div>
                </td>

            </tr>
            @endforeach
        @endif
    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">訊息</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
        </div>
      </div>
    </div>
  </div>

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

    function getMessage(id){
        $.ajax({
            type: "POST",
            url: "/api/getMessage",
            data: {
                id:id
            },
            dataType: "json",
            success: function (res) {
                if(res.s==1){
                    $('.modal-body').html(res.m);
                }
            },
        });
    }


</script>
@endsection