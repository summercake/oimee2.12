<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" id="nav-main">
        <a class="navbar-brand" href="#">
            <img src="{{asset('/img/logo3.png')}}" width="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="nav navbar-nav mr-auto mt-2 mt-lg-0" id="nav-main-btn">
                <li class="nav-item">
                    <a href="{{route('new-home')}}" class=" mx-3" style="font-size: 1.25rem;"><b>首页</b></a>
                    <span class="text-primary">/</span>
                </li>
                <li class="nav-item">
                    <a href="{{route('new-home')}}" class=" mx-3" style="font-size: 1.25rem;"><b>折扣</b></a>
                    <span class="text-primary">/</span>
                </li>
                <li class="nav-item">
                    <a href="#" class=" mx-3" id="nav-special-item" style="font-size: 1.25rem;"><b>转寄</b></a>
                    <span class="text-primary">/</span>
                </li>
                <li class="nav-item">
                    <a href="#" class=" ml-3" style="font-size: 1.25rem;"><b>社区</b></a>
                </li>
            </ul>
            <form action="{{route('discount-list')}}" method="get" class="form-inline my-2 my-lg-0 .d-sm-none .d-md-block mx-1" >
                <div class="input-group" id="nav-search">
                    <div class="input-group-prepend">
                        <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option selected>请选择城市...</option>
                            <option value="1">Houston</option>
                            <option value="2">Dallas</option>
                            <option value="3">Austin</option>
                        </select>
                    </div>
                    <input class="form-control" type="search" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav ml-auto mt-2 mt-lg-0" id="nav-func-btn">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}"><b>登陆</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}"><b>注册</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user-info')}}">
                        <img src="{{asset('/img/avatar.jpg')}}" width="16" class="rounded-circle d-inline" alt="">
                        <b>我的欧米</b>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}"><b>关于欧米</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adv-business')}}"><b>广告推广</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}"><b>联系我们</b></a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="nav-second">
        <ul class="nav justify-content-start" id="tag-links">
            <li class="nav-item ml-3 mr-3"><a href="">时尚</a></li>
            <li class="nav-item mx-3"><a href="">美妆</a></li>
            <li class="nav-item mx-3"><a href="">数码电子</a></li>
            <li class="nav-item mx-3"><a href="">生活</a></li>
            <li class="nav-item mx-3"><a href="">运动</a></li>
            <li class="nav-item mx-3"><a href="">美食</a></li>
            <li class="nav-item mx-3"><a href="">营养健康</a></li>
            <li class="nav-item mx-3"><a href="">限时特惠</a></li>
            <li class="nav-item mx-3"><a href="">时尚</a></li>
            <li class="nav-item mx-3"><a href="">美妆</a></li>
            <li class="nav-item mx-3"><a href="">数码电子</a></li>
            <li class="nav-item mx-3"><a href="">生活</a></li>
            <li class="nav-item mx-3"><a href="">限时特惠</a></li>
            <li class="nav-item mx-3"><a href="">时尚</a></li>
            <li class="nav-item mx-3"><a href="">美妆</a></li>
            <li class="nav-item mx-3"><a href="">数码电子</a></li>
            <li class="nav-item mx-3"><a href="">生活</a></li>
            <li class="nav-item mx-3"><a href="">运动</a></li>
        </ul>
    </div>
</div>
{{--<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light" id="nav-main">
        <a class="navbar-brand" href="#">
            <img src="{{asset('/img/logo3.png')}}" width="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <form class="form-inline my-2 my-lg-0 .d-sm-none .d-md-block mx-auto">
                <div class="input-group">
                    <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected>请选择城市...</option>
                        <option value="1">Houston</option>
                        <option value="2">Dallas</option>
                        <option value="3">Austin</option>
                    </select>
                </div>
                <div class="input-group .d-none .d-xl-block .d-lg-block ">
                    <input class="form-control" type="search" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" id="">
                            <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav ml-auto mt-2 mt-lg-0 justify-content-rights">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">登陆</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">注册</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">关于欧米</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adv-business')}}">广告推广</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">联系我们</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="nav-second">
        <ul class="nav justify-content-start" id="nav-btn">
            <li class="nav-item">
                <a href="{{route('new-home')}}" class="btn btn-primary mr-2" style="font-size: 1.25rem;"><b>首页</b></a>
            </li>
            <li class="nav-item">
                <a href="{{route('new-home')}}" class="btn btn-primary mx-2" style="font-size: 1.25rem;"><b>折扣</b></a>
            </li>
            <li class="nav-item">
                <a href="#" class="btn btn-primary mx-2" style="font-size: 1.25rem;"><b>转寄</b></a>
            </li>
            <li class="nav-item">
                <a href="#" class="btn btn-primary mx-2" style="font-size: 1.25rem;"><b>社区</b></a>
            </li>
        </ul>
        <ul class="nav justify-content-start my-2" id="tag-links">
            <li class="nav-item ml-3 mr-5"><a href="">时尚</a></li>
            <li class="nav-item mx-5"><a href="">美妆</a></li>
            <li class="nav-item mx-5"><a href="">数码电子</a></li>
            <li class="nav-item mx-5"><a href="">生活</a></li>
            <li class="nav-item mx-5"><a href="">运动</a></li>
            <li class="nav-item mx-5"><a href="">美食</a></li>
            <li class="nav-item mx-5"><a href="">营养健康</a></li>
            <li class="nav-item mx-5"><a href="">限时特惠</a></li>
            <li class="nav-item mx-5"><a href="">时尚</a></li>
        </ul>
    </div>
</div>--}}
