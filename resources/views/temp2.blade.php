@extends('layouts.main')

@section('title','食衣住行相關介紹')

@section('css')

<link rel="stylesheet" href="/css/jobrelease_show.css">
<style>
    .outter {
        min-height: 500px;
    }

    h4 {
        margin-bottom: 12px;
    }
</style>
@endsection

@section('content')
<div class="outter mt-4 mb-4 pt-4 pb-10">

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3 class="mb-4">【食衣住行相關介紹】</h3>
                <h4>食 : </h4>
                <h4>早餐 : 自費15元</h4>
                <h4>中餐 :三樣菜 50-70元 自費25</h4>
                <h4>晚餐 :三樣菜 50-70元 自費25</h4>
                <h4 style="color:red">全部是薪資裡扣除</h4>
                <div>
                    <img style="width:50%;height:auto;" src="/images/eat.png">
                </div>
                <br>
                <h4>衣 : 只有無塵服</h4><br>
                <br>
                <h4>住 : 前三個月免費，第四個月起收費如下:</h4>
                <h4> 雅房:11000/月</h4>
                <h4>兩人套房:2500/月</h4>
                <h4>投幣式洗衣房</h4>
                <h4>注:無須押金，電費自行分攤(包水)，</h4>
                <h4> 距公司不到五分鐘車程(上下班有車接送)</h4>
                <br>
                <h4>行 : 有交通車到苗栗/關西/峨嵋竹東線</h4>
                <br>
                <h4>育樂: 籃球場、健身中心、按摩師駐廠服務、電視、撞球、桌球室</h4>
                <br>
                <img style="position:absolute;right:0;bottom:10%;width:auto;height:200px;z-index:-1;opacity:50%;" src="/images/live.png">
                
            </div>
        </div>

    </div>

</div>



@endsection

@section('js')

@endsection