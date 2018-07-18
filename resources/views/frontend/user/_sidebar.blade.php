<div class="user-sidebar bg-light p-4 ">
    <ul class="list-unstyled">
        <li>
            <a href="" title="更改头像" class="">
                <img src="{{asset('/img/avatar2.jpg')}}" alt="" class="img-fluid rounded-circle mx-auto d-block">
            </a>
        </li>
        <li class="text-center py-3"><h3>Jack</h3></li>
        <li>
            <div class="row justify-content-center mb-2">
                <a href="" class="mx-3" data-toggle="tooltip" title="实名认证" data-placement="right"><i class="far fa-user"></i></a>
                <a href="" class="mx-3" data-toggle="tooltip" title="绑定手机" data-placement="top"><i class="fas fa-mobile-alt"></i></a>
                <a href="" class="mx-3" data-toggle="tooltip" title="绑定邮箱" data-placement="top"><i class="far fa-envelope"></i></a>
            </div>
        </li>
    </ul>
    <hr>
    <ul class="list-unstyled text-center">
        <li class="mb-2"><b>账户管理</b></li>
        <li><a href="{{route('user-info')}}">个人信息</a></li>
        <li><a href="{{route('user-pwd')}}">修改密码</a></li>
        <li><a href="">手机绑定</a></li>
        <li><a href="">实名认证</a></li>
        <li><a href="">消息中心</a></li>
        <li><a href="">联系客服</a></li>
    </ul>
    <hr>
    <ul class="list-unstyled text-center">
        <li class="mb-2"><b>转寄管理</b></li>
        <li><a href="{{route('user-address')}}">地址管理</a></li>
        <li><a href="{{route('user-address-add')}}">添加地址</a></li>
        <li><a href="">代收运单管理</a></li>
        <li><a href="">转寄订单</a></li>
        <li><a href="">代收仓库地址</a></li>
    </ul>
    <hr>
    <ul class="list-unstyled text-center">
        <li><label><a href="{{route('user-collection')}}"><b>我的收藏</b></a></label></li>
    </ul>
    <hr>
    <ul class="list-unstyled text-center">
        <li class="mb-2"><b>我的文章</b></li>
        <li><a href="">文章管理</a></li>
        <li><a href="">评价管理</a></li>
    </ul>
</div>