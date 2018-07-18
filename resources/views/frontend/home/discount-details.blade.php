@extends('frontend.layouts.app3')
@section('content')
    <div class="container">
        @include('frontend.home.components._long_adv')
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="#">折扣</a></li>
                <li class="breadcrumb-item"><a href="#">鞋帽</a></li>
                <li class="breadcrumb-item"><a href="#">Clarks</a></li>
                <li class="breadcrumb-item active text-primary" aria-current="page">新款短靴</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-2">
                <img class="media-object" src="{{asset('/img/boots.jpg')}}" alt="" width="180">
                <h5 class="text-center mb-0 mt-2" style="text-decoration: line-through;">原价: 299</h5>
                <h5 class="text-center mb-0 text-primary">现价: 199</h5>
                <p class="text-center"><a href="#" class="btn btn-lg btn-primary m-2">立即购买</a></p>
            </div>
            <div class="col-6">
                <a href="" class="text-dark"><h3>Nike 新款全功能跑鞋</h3></a>
                <p class="text-dark-light">关键字：运动 跑鞋 Nike 折扣 限时 爆款</p>
                <p class="text-dark-light">Amazon 现有 adidas 男士 Rise up 2 篮球鞋，黑色 US 9 码，原价 $80.00，现在特价仅需$33.59且免运费。专业的篮球鞋，橡胶鞋底防滑耐磨，增加了运动时的安全性。</p>
                @include('frontend.home.components._discount-share-row')
                <p class="text-dark-light">Amazon 现有 adidas 男士 Rise up 2 篮球鞋，黑色 US 9 码，原价 $80.00，现在特价仅需$33.59且免运费。专业的篮球鞋，橡胶鞋底防滑耐磨，增加了运动时的安全性。</p>
                <p class="text-dark-light">Amazon 现有 adidas 男士 Rise up 2 篮球鞋，黑色 US 9 码，原价 $80.00，现在特价仅需$33.59且免运费。专业的篮球鞋，橡胶鞋底防滑耐磨，增加了运动时的安全性。</p>
                <p class="text-dark-light">Amazon 现有 adidas 男士 Rise up 2 篮球鞋，黑色 US 9 码，原价 $80.00，现在特价仅需$33.59且免运费。专业的篮球鞋，橡胶鞋底防滑耐磨，增加了运动时的安全性。</p>
                <p class="text-dark-light">Amazon 现有 adidas 男士 Rise up 2 篮球鞋，黑色 US 9 码，原价 $80.00，现在特价仅需$33.59且免运费。专业的篮球鞋，橡胶鞋底防滑耐磨，增加了运动时的安全性。</p>
                <p class="text-dark-light">Amazon 现有 adidas 男士 Rise up 2 篮球鞋，黑色 US 9 码，原价 $80.00，现在特价仅需$33.59且免运费。专业的篮球鞋，橡胶鞋底防滑耐磨，增加了运动时的安全性。</p>
                <div class="container">
                    <div class="row cards-row-show p-2">
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
                    <div class="row cards-row p-2">
                        <div class="col-4">
                            @include('frontend.home.components._card')
                        </div>
                        <div class="col-4 ">
                            @include('frontend.home.components._card')
                        </div>
                        <div class="col-4 ">
                            @include('frontend.home.components._card')
                        </div>
                    </div>
                    <div class="row cards-row p-2">
                        <div class="col-4 ">
                            @include('frontend.home.components._card')
                        </div>
                        <div class="col-4">
                            @include('frontend.home.components._card')
                        </div>
                        <div class="col-4">
                            @include('frontend.home.components._card')
                        </div>
                    </div>
                    <div class="cards-row-hidden">
                        <div class="row cards-row p-2">
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
                        <div class="row cards-row p-2">
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
                        <div class="row cards-row p-2">
                            <div class="col-4">
                                @include('frontend.home.components._card')
                            </div>
                            <div class="col-4 ">
                                @include('frontend.home.components._card')
                            </div>
                            <div class="col-4 ">
                                @include('frontend.home.components._card')
                            </div>
                        </div>
                        <div class="row cards-row p-2">
                            <div class="col-4 ">
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
                            <a class="btn btn-outline-primary w-100 text-primary" id="show-more">查看更多同类商品&nbsp;<i class="fas fa-angle-double-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                @include('frontend.layouts._dis-info-right')
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
	    $('.dropdown-menu a').on('click', function(){
		    //alert('123');
		    $('.search-city').val($(this).text());
	    });
	    $('#show-more').on('click', function() {
		    $('.cards-row-hidden').css('display', 'block');
	    });
    </script>
@endsection