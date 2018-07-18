<div class="nav-section">
    <div class="row" id="nav-tags">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 text-left">
                    <a href="{{route('home')}}" class="mx-1 tag-a"><b>首页</b></a>
                    <a href="{{route('home')}}" class="mx-1 tag-a"><b>折扣</b></a>
                    <a href="#" class="mx-1 tag-a"><b>转寄</b></a>
                    <a href="#" class="mx-1 tag-a"><b>社区</b></a>
                </div>
                <div class="col-lg-5 col-md-12 text-center">
                    <a href="#" class="mx-1">手机</a>
                    <a href="#" class="mx-1">电脑</a>
                    <a href="#" class="mx-1">美妆</a>
                    <a href="#" class="mx-1">鞋帽</a>
                    <a href="#" class="mx-1">箱包</a>
                    <a href="#" class="mx-1">箱包</a>
                    <a href="#" class="mx-1">箱包</a>
                    <a href="#" class="mx-1">其他</a>
                </div>
                <div class="col-lg-4 col-md-12 text-right ">
                    <a href="{{route('login')}}" class="mx-1">登录</a>
                    <a href="{{route('register')}}" class="mx-1">注册</a>
                    <a href="#" class="mx-1">关于我们</a>
                    <a href="#" class="mx-1">广告推广</a>
                    <a href="#" class="mx-1">联系我们</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col nav-logo justify-content-start">
                <a href="{{route('home')}}" class="navbar-brand p-0">
                    <img src="{{url('/img/logo2.png')}}" width="220" alt="">
                </a>
            </div>
            <div class="col nav-search">
                <div class="input-group input-group-sm justify-content-end">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">请选择城市</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01">
                        <option selected>Houston</option>
                        <option value="1">Dallas</option>
                        <option value="2">Austin</option>
                        <option value="3">New York</option>
                    </select>
                    <input type="text" placeholder="请输入商品" class="form-control search-item" name="">
                    <div class="input-group-append">
                        <button class="btn btn-search" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>