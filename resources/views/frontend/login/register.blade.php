@extends('frontend.layouts.app3')
@section('content')
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <img src="{{asset('/img/nike1.jpg')}}" class="img-fluid">
                </div>
                <div class="col-4">
                    <div class="card p-4">
                        <div class="card-title p-3 m-0">
                            <h4 class="m-0 pr-2" id="login-title">注册</h4>
                        </div>
                        <div class="card-body" id="login">
                            <a href="{{route('login')}}" class="btn-register pull-right">返回登陆?</a>
                            <div class="login-form">
                                <form action="" method="" id="">
                                    <div class="form-group">
                                        <label for="email"><i class="fas fa-envelope"></i>&nbsp;邮箱</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="xxx@email.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><i class="fas fa-key"></i>&nbsp;密码</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1"><i class="fas fa-key"></i>&nbsp;确认密码</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="row justify-content-center mt-4">
                                        <button type="submit" class="btn btn-primary">立即注册</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection