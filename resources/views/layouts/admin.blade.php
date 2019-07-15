
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/datatables.min.css">
    <title>庶民生活後台｜@yield('title')</title>
    <style>
        *{
            position: relative;
            box-sizing: border-box;
        }
        .sidebar{
            height: 100vh;
            width: 200px;
            background-color: lightgray;
        }
        .sidebar ul{
            list-style: none;
            padding: 8px 0;
        }
        .sidebar ul li{
            padding: 8px 12px;
            cursor: pointer;
        }
        .sidebar ul li:hover{
            background-color: gray;
        }
        .sidebar ul li:hover > a{
            color: #fff;
        }
        .sidebar ul li a{
            display: block;
            color: #000;
            text-decoration: none;
        }
        .sidebar .now{
            background-color: gray;
        }
        .sidebar .now a{
            color:#fff;
        }
        .content-outter{
            position: absolute;
            padding: 8px;
            top: 0;
            right:0;
            height: 100vh;
            width: calc(100% - 200px);
            background-color: #fff;
            overflow-y:scroll;
        }
    </style>
    @yield('css')
</head>
<body>
    <div class="sidebar">
        <ul>
            <li class="{{Request::is('admin')?'now':''}}"><a href="/admin">總覽</a></li>
            <li class="{{Request::is('homeManage')?'now':''}}"><a href="/homeManage">首頁管理</a></li>
            <li class="{{Request::is('resume')?'now':''}}"><a href="/resume">履歷管理</a></li>
            <li class="{{Request::is('wanted')?'now':''}}"><a href="/wanted">徵才管理</a></li>
            <li class="{{Request::is('contact')?'now':''}}"><a href="/contact">訊息管理</a></li>
            <li class="{{Request::is('jobrelease')?'now':''}}"><a href="/jobrelease">最新職缺</a></li>
        </ul>
    </div>
    <div class="content-outter">
        @yield('content')    
    </div>
    
</body>
{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/datatables.min.js"></script>

@yield('js')
</html>



