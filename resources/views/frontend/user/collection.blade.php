@extends('frontend.layouts.app3')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                @include('frontend.user._sidebar')
            </div>
            <div class="col-6">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item"><a href="#">我的欧米</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page">我的收藏</li>
                    </ol>
                </nav>
                <div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>图片</th>
                            <th>商品名称</th>
                            <th>收藏时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td><img src="{{asset('/img/adidas1.jpeg')}}" width="80" alt=""></td>
                            <td>阿迪达斯 滑板鞋</td>
                            <td>07-08-2016 03:04:22</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-success">分享</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td><img src="{{asset('/img/adidas1.jpeg')}}" width="80" alt=""></td>
                            <td>阿迪达斯 滑板鞋</td>
                            <td>07-08-2016 03:12:28</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-success">分享</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td><img src="{{asset('/img/adidas1.jpeg')}}" width="80" alt=""></td>
                            <td>阿迪达斯 滑板鞋</td>
                            <td>07-08-2016 03:12:28</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-success">分享</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td><img src="{{asset('/img/adidas1.jpeg')}}" width="80" alt=""></td>
                            <td>阿迪达斯 滑板鞋</td>
                            <td>07-08-2016 03:12:28</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-success">分享</a>
                                <a href="#" class="btn btn-sm btn-outline-primary">删除</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4" id="dis-info-right">
                @include('frontend.layouts._dis-info-right')
            </div>
        </div>
    </div>
    @include('frontend.home.components._long_adv')
@endsection