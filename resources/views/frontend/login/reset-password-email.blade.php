@extends('frontend.layouts.app3')
@section('content')
    <div class="container">
        @include('frontend.home.components._long_adv')
        <div class="row">
            <div class="col-6 mx-auto" id="reset-pwd">
                <form action="{{route('reset-pwd')}}" method="post" id="">
                    {{csrf_field()}}
                    <div class="card p-3">
                        <div class="card-body" id="login">
                            <h4 class="card-title btn-login mb-3">找回密码</h4>
                            <div class="login-form">
                                <div class="form-group">
                                    <label for="text"><i class="fas fa-user"></i>&nbsp;您的邮箱</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="xxx@email.com">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-outline-primary"><b>找回密码</b></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('script')
@endsection