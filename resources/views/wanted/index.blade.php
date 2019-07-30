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
            @if(count($wanted)>0)
                @foreach($wanted as $w)
                <tr>
                <td>{{$w->company_name}}</td>
                <td>{{$w->company_id}}</td>
                <td>{{$w->contact_name}}</td>
                <td>{{$w->contact_phone}}</td>
                <td>{{$w->email}}</td>
                <td>{{$w->fax}}</td>
                <td>{{$w->address}}</td>
                <td>{{$w->wanted_cat}}</td>
                <td>    
                    <div class="btn btn-sm btn-info"><a class="text-white" href="/wanted/{{$w->id}}" target="_blank">詳細</a></div>    
                </td>
                
                </tr>
                @endforeach
            @endif
        </tbody>
</table>

@endsection

@section('js')
<script>
$(document).ready( function () {
    $('#data-table').DataTable();
});
</script>
@endsection