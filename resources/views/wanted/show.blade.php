<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <title>企業求才：{{$wanted->company_name}}</title>
</head>
<style>
    *{
        position: relative;
        box-sizing: border-box;
    }
    body{
        padding: 20px 80px;
        margin: 0;
    }
.left{
    display: inline-block;
    width: calc(40% - 3px);
    vertical-align: top;
    height: 680px;
}
.right{
    vertical-align: top;
    display: inline-block;
    width: calc(60% - 3px);
    height: 680px;
}
table{
    border-collapse: collapse;
    width: 100%;
    height: 100%;
}
table td{
    border: 1px solid lightgray;
    padding: 0 8px;
}
.title{
    width: 100px;
    text-align: center;
}
.long-text{
    height: 100%;
    width: 100%;
    padding: 8px 0;
    overflow-y: scroll;
}
</style>
<body>
    <div class="left">
        <table>
            <tr>
                <td class="title">公司名稱</td>
                <td>{{$wanted->company_name}}</td>
            </tr>
            <tr>
                <td class="title">求才需求</td>
                <td>{{$wanted->wanted_cat}}</td>
            </tr>
            <tr>
                <td class="title">統一編號</td>
                <td>{{$wanted->company_id}}</td>
            </tr>
            <tr>
                <td class="title">聯絡人</td>
                <td>{{$wanted->contact_name}}</td>
            </tr>
            <tr>
                <td class="title">聯絡電話</td>
                <td>{{$wanted->contact_phone}}</td>
            </tr>
            <tr>
                <td class="title">傳真</td>
                <td>{{$wanted->fax}}</td>
            </tr>
            <tr>
                <td class="title">Email</td>
                <td>{{$wanted->email}}</td>
            </tr>
            <tr>
                <td class="title">公司地址</td>
                <td>{{$wanted->address}}</td>
            </tr>
            
            
        </table>
    </div>


    <div class="right">
    <table>
                    <tr>
                        <td class="title">需求說明</td>
                        <td>    
                            <div class="long-text">
                                {{$wanted->content}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">其他服務需求</td>
                        <td>
                            <div class="long-text">
                                {{$wanted->other}}
                            </div>
                        </td>
                    </tr>
        </table>
    </div>
</body>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="/js/bootstrap.min.js"></script> --}}
</html>