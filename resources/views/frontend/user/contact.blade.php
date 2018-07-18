@extends('frontend.layouts.app3')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                @include('frontend.user._sidebar')
            </div>
            <div class="col-6">
                <div class="userinfo">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="#">我的欧米</a></li>
                            <li class="breadcrumb-item"><a href="#">账户管理</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">联系客服</li>
                        </ol>
                    </nav>
                    <div>
                        <ul class="list-unstyled list-group">
                            <li class="my-2 list-group-item">
                                <a href="#" class="btn btn-primary"><b>与在线客服对话</b></a>
                            </li>
                            <li class="my-2 list-group-item">
                                <a href="tel:18475555555"><b>电话客服 1 :</b> Click Here To Call Support 1-847-555-5555</a>
                            </li>
                            <li class="my-2 list-group-item">
                                <a href="tel:18475555555"><b>电话客服 2 :</b> Click Here To Call Support 1-847-555-5555</a>
                            </li>
                            <li class="my-2 list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <div class="card" style="width: 20rem;">
                                            <img class="card-img-top" src="{{asset('/img/beauty.png')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">客服微信 1</h4>
                                                <p class="card-text">xxxxxxxxxxxxxxxx</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col">
                                        <div class="card" style="width: 20rem;">
                                            <img class="card-img-top" src="{{asset('/img/beauty.png')}}" alt="Card image cap">
                                            <div class="card-body">
                                                <h4 class="card-title">客服微信 2</h4>
                                                <p class="card-text">xxxxxxxxxxxxxxxx</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="col-4" id="dis-info-right">
                @include('frontend.layouts._dis-info-right')
            </div>
        </div>
    </div>
    @include('frontend.home.components._long_adv')
@endsection