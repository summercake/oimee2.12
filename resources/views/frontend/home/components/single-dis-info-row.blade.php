<div class="media bg-light p-4 mb-3">
    <a href="{{route('discount-details')}}"><img class="" src="{{asset('/img/boots.jpg')}}" width="200" alt=""></a>
    <div class="media-body p-2">
        <a href="{{route('discount-details')}}" class="text-dark"><h3>Nike 新款全功能跑鞋</h3></a>
        <p class="text-dark-light">关键字：运动 跑鞋 Nike 折扣 限时 爆款</p>
        <p>Amazon 现有 adidas 男士 Rise up 2 篮球鞋，黑色 US 9 码，原价 $80.00，现在特价仅需$33.59且免运费。专业的篮球鞋，橡胶鞋底防滑耐磨，增加了运动时的安全性。</p>
        <p><a href="#" class="btn btn-primary">立即购买</a></p>
        @include('frontend.home.components._discount-share-row')
    </div>
</div>