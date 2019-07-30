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
            {{-- <th>-</th> --}}
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
                <td>{{$contact->message}}</td>

            </tr>
            @endforeach
        @endif
    </tbody>
</table>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('#data-table').DataTable(
            //     {
            //     'processing': true,
            //     'serverSide': true,
            //     'serverMethod': 'GET',
            //     'ajax': {
            //         'url':'/api/getContact',
            //         'dataSrc':'aaData',
            //     },
            //     'columns': [
            //         { data: 'id' },
            //         { data: 'name' },
            //         { data: 'email' },
            //         { data: 'phone' },
            //         { data: 'message' },
            //     ]
            // }
        );
    });
</script>
@endsection