@extends('frontend.layouts.app3')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                @include('frontend.user._sidebar')
            </div>
            <div class="col-6">
                <div class="userinfo">
                    <form action="" method="" id="">
                    <nav aria-label="breadcrumb ">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="#">我的欧米</a></li>
                            <li class="breadcrumb-item"><a href="#">账户管理</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">个人信息</li>
                            <button type="submit" class="btn btn-sm btn-outline-primary ml-auto"><b>保存</b></button>
                        </ol>
                    </nav>
                    <div class="card p-3">
                        <div class="card-body" id="login">
                            {{--<h4 class="card-title d-inline btn-login">个人信息</h4>--}}
                            <div class="login-form">
                                    <div class="form-group">
                                        <label for="text"><i class="fas fa-user"></i>&nbsp;用户名</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"><i class="fas fa-envelope"></i>&nbsp;邮箱</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="xxx@email.com">
                                    </div>
                                    <div class="row justify-content-center login-btn">
                                    </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-4" id="dis-info-right">
                @include('frontend.layouts._dis-info-right')
            </div>
        </div>
    </div>
    @include('frontend.home.components._long_adv')
@endsection