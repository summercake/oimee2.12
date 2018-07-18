@extends('frontend.layouts.app3')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2">
                @include('frontend.user._sidebar')
            </div>
            <div class="col-10">
                <div class="userinfo">
                    <div class="address-table">
                        <nav aria-label="breadcrumb ">
                            <ol class="breadcrumb bg-light">
                                <li class="breadcrumb-item"><a href="#">我的欧米</a></li>
                                <li class="breadcrumb-item"><a href="#">转寄管理</a></li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">地址管理</li>
                                <a href="{{route('user-address-add')}}" class="btn btn-sm btn-outline-primary ml-auto"><b>添加地址</b></a>
                            </ol>
                        </nav>
                        <table class="table table-sm table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">姓名</th>
                                <th scope="col">电话</th>
                                <th scope="col">国家</th>
                                <th scope="col">地址</th>
                                <th scope="col">邮编</th>
                                <th scope="col">操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Jack</td>
                                <td>123-456-789</td>
                                <td>USA</td>
                                <td>1720 S 75th St, Houston, TX</td>
                                <td>77072</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-outline-success">修改</a>
                                    <a href="" class="btn btn-sm btn-outline-danger">删除</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Jack</td>
                                <td>123-456-789</td>
                                <td>USA</td>
                                <td>1720 S 75th St, Houston, TX</td>
                                <td>77072</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-outline-success">修改</a>
                                    <a href="" class="btn btn-sm btn-outline-danger">删除</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Jack</td>
                                <td>123-456-789</td>
                                <td>USA</td>
                                <td>1720 S 75th St, Houston, TX</td>
                                <td>77072</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-outline-success">修改</a>
                                    <a href="" class="btn btn-sm btn-outline-danger">删除</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.home.components._long_adv')
@endsection