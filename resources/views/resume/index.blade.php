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
            @if(count($resumes)>0)
                @foreach($resumes as $res)
                <tr>
                    <td style="color:{{($res->gender==true)?'#007bff':'#dc3545'}};">{{$res->name}}</td>
                    
                    <td>{{$res->tel}}</td>
                    <td>{{$res->phone}}</td>
                    <td>{{$res->email}}</td>

                    <td>{{$res->height}}/{{$res->weight}}</td>
                    
                    <td>{{$res->edu}}</td>
                    <td>{{$res->school}}</td>

                    <td>
                        <div class="btn btn-sm btn-info"><a class="text-white" href="/resume/{{$res->id}}" target="_blank">詳細</a></div>
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