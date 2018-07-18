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
                                <li class="breadcrumb-item"><a href="#">转寄管理</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">添加地址</li>
                                <button type="submit" class="btn btn-sm btn-outline-primary ml-auto"><b>保存</b></button>
                            </ol>
                        </nav>
                        <div class="card">
                            <div class="card-body" id="login">
                                <div class="login-form">
                                    <div class="form-group">
                                        <label for="country">国家</label>
                                        <select class="custom-select" id="country">
                                            <option selected>请选择国家</option>
                                            <option value="1">美国</option>
                                            <option value="2">中国</option>
                                            <option value="3">加拿大</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">地址</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="请输入完整地址">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">邮编</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="请输入邮编">
                                    </div>
                                    {{--<div class="row justify-content-center login-btn">
                                        <button type="submit" class="btn-main">保存</button>
                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-4">
                @include('frontend.layouts._dis-info-right')
            </div>
        </div>
    </div>
    @include('frontend.home.components._long_adv')
@endsection