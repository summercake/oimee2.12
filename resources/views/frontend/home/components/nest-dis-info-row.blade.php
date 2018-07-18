<div class="media bg-light p-4" id="complete-dis-info">
    <a href="{{route('discount-details')}}"><img class="" src="{{asset('/img/boots.jpg')}}" width="200" alt=""></a>
    <div class="media-body p-2">
        <a href="{{route('discount-details')}}" class="text-dark"><h3>Nike 新款全功能跑鞋</h3></a>
        <p class="text-dark-light">关键字：运动 跑鞋 Nike 折扣 限时 爆款</p>
        <p class="text-dark-light">Amazon 现有 adidas 男士 Rise up 2 篮球鞋，黑色 US 9 码，原价 $80.00，现在特价仅需$33.59且免运费。专业的篮球鞋，橡胶鞋底防滑耐磨，增加了运动时的安全性。</p>
        <p><a href="#" class="btn btn-primary">立即购买</a></p>
        <div class="row cards-row-show">
            <div class="col-md-4">
                @include('frontend.home.components._card')
            </div>
            <div class="col-md-4">
                @include('frontend.home.components._card')
            </div>
            <div class="col-md-4">
                @include('frontend.home.components._card')
            </div>
        </div>
        <div class="row cards-row-hidden">
            <div class="row cards-row">
                <div class="col-4">
                    @include('frontend.home.components._card')
                </div>
                <div class="col-4">
                    @include('frontend.home.components._card')
                </div>
                <div class="col-4">
                    @include('frontend.home.components._card')
                </div>
            </div>
            <div class="row cards-row">
                <div class="col-4">
                    @include('frontend.home.components._card')
                </div>
                <div class="col-4">
                    @include('frontend.home.components._card')
                </div>
                <div class="col-4">
                    @include('frontend.home.components._card')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text-center w-100 m-4">
                <a class="btn btn-outline-primary w-100 text-primary" id="show-more">查看同类商品&nbsp;<i class="fas fa-angle-double-down"></i></a>
                <a class="btn btn-outline-secondary w-100" id="hide-more">收起同类商品&nbsp;<i class="fas fa-angle-double-up"></i></a>
            </div>
        </div>
        @include('frontend.home.components._discount-share-row')
    </div>
</div>