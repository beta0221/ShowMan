@extends('layouts.admin')

@section('title','履歷管理')

@section('css')

@endsection

@section('content')

<table id="data-table" class="display">
        <thead>
            <tr>
                <th>姓名</th>
                <th>性別</th>
                <th>生日</th>
                {{-- <th>聯絡電話</th>
                <th>手機</th>
                <th>Email</th> --}}
                <th>身高/體重</th>
                {{-- <th>地址</th> --}}
                <th>教育程度</th>
                <th>畢業學校</th>
                <th>工作經歷</th>
                <th>專長</th>
                <th>基本資料</th>
            </tr>
        </thead>
        <tbody>
            @if(count($resumes)>0)
                @foreach($resumes as $res)
                <tr>
                    <td>{{$res->name}}</td>
                    <td>{{($res->gender==true)?'男':'女'}}</td>
                    <td>{{$res->birthday}}</td>
                    {{-- <td>{{$res->tel}}</td>
                    <td>{{$res->phone}}</td>
                    <td>{{$res->email}}</td> --}}
                    <td>{{$res->height}}/{{$res->weight}}</td>
                    {{-- <td>{{$res->address}}...</td> --}}
                    <td>{{$res->edu}}</td>
                    <td>{{$res->school}}</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                @endforeach
            @endif
        </tbody>
</table>

            

@endsection

@section('js')

@endsection