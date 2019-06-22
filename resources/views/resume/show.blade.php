<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css"> --}}
    <title>履歷：{{$resume->name}}</title>
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
                <td class="title">姓名</td>
                <td>{{$resume->name}}</td>
            </tr>
            <tr>
                <td class="title">出生日期</td>
                <td>{{$resume->birthday}}</td>
            </tr>
            <tr>
                <td class="title">手機</td>
                <td>{{$resume->phone}}</td>
            </tr>
            <tr>
                <td class="title">住家電話</td>
                <td>{{$resume->tel}}</td>
            </tr>
            <tr>
                <td class="title">Email</td>
                <td>{{$resume->email}}</td>
            </tr>
            <tr>
                <td class="title">身高/體重</td>
                <td>{{$resume->height}}/{{$resume->weight}}</td>
            </tr>
            <tr>
                <td class="title">地址</td>
                <td>{{$resume->address}}</td>
            </tr>
            <tr>
                <td class="title">教育程度</td>
                <td>{{$resume->edu}}</td>
            </tr>
            <tr>
                <td class="title">畢業學校</td>
                <td>{{$resume->school}}</td>
            </tr>
        </table>
    </div>


    <div class="right">
    <table>
                    <tr>
                        <td class="title">工作經歷</td>
                        <td>    
                            <div class="long-text">
                                {{$resume->experience}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">專業技能</td>
                        <td>
                            <div class="long-text">
                                {{$resume->skill}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="title">基本資料</td>
                        <td>
                            <div class="long-text">
                                {{$resume->about}}
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