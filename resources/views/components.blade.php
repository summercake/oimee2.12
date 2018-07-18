<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/components.css">
</head>
<body>

{{-- btn --}}
<div class="container mt-1">
    <h3>Button</h3>
    <div class="row my-3">
        <div class="col-md-12">
            <a href="#" class="btn btn-main mx-2">小铺</a>
            <a href="#" class="btn btn-main mx-2">商城</a>
            <a href="#" class="btn btn-main mx-2">转寄</a>
            <a href="#" class="btn btn-main-outline mx-2">社区</a>
            <a href="#" class="btn btn-main-round mx-2">社区</a>
            <a href="#" class="btn btn-main-outline-round mx-2">社区</a>
            <a href="#" class="btn btn-main-round-light mx-2">社区社区</a>
            <a href="#" class="btn btn-main-outline-round-light mx-2">社区</a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-12 mx-2">
            <div class="row">
                <div class="col-md-1 dropdown-group">
                    <div class="btn-group">
                        <a href="#" class="btn btn-main-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">小铺&nbsp;<i class="fas fa-caret-down"></i></a>
                    </div>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <div class="col-md-1 a-dropdown-group">
                    <div class="btn-group">
                        <a href="#" class="main-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">小铺&nbsp;<i class="fas fa-caret-down"></i></a>
                    </div>
                    <div class="a-dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

{{-- adv --}}
<div class="container">
    <h3>Advertisement</h3>
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
            <div class="container adv-top-section my-3 py-2 px-4">
                <div class="row my-1">
                    <div class="col-md-6 px-1">
                        <a href="" class="btn-main-outline-round-light adv-btn-hot ">热门推荐</a>
                        <a href="" class="btn-main-outline-round-light adv-btn-like ">最多关注</a>
                    </div>
                    <div class="col-md-6 px-1">
                        <nav aria-label="Page navigation example ">
                            <ul class="pagination mb-0 float-right">
                                <li class="page-item">
                                    <a class="page-link" href="#carouselExampleControls" aria-label="Previous" data-slide="prev">
                                        <i class="fas fa-arrow-circle-left " style="font-size: 20px;"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#carouselExampleControls" aria-label="Next" data-slide="next">
                                        <i class="fas fa-arrow-circle-right" style="font-size: 20px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row adv-top-hot">
                    <div class="row">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="row mx-0">
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                    <p class=" adv-card-price">99元包邮（99元定金） </p>
                                                    <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                                </div>
                                                <i class="fas fa-cut adv-cut"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                    <p class=" adv-card-price">99元包邮（99元定金） </p>
                                                    <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                                </div>
                                                <i class="fas fa-cut fa-2x adv-cut"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                    <p class=" adv-card-price">99元包邮（99元定金） </p>
                                                    <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                                </div>
                                                <i class="fas fa-cut fa-2x adv-cut"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                    <p class=" adv-card-price">99元包邮（99元定金） </p>
                                                    <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                                </div>
                                                <i class="fas fa-cut fa-2x adv-cut"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row mx-0">
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                    <p class=" adv-card-price">99元包邮（99元定金） </p>
                                                    <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                                </div>
                                                <i class="fas fa-cut fa-2x adv-cut"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                    <p class=" adv-card-price">99元包邮（99元定金） </p>
                                                    <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                                </div>
                                                <i class="fas fa-cut fa-2x adv-cut"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                    <p class=" adv-card-price">99元包邮（99元定金） </p>
                                                    <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                                </div>
                                                <i class="fas fa-cut fa-2x adv-cut"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="card">
                                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                                <div class="card-body p-1">
                                                    <p class=" adv-card-price">99元包邮（99元定金） </p>
                                                    <p class=" adv-card-detail">限内蒙古、青海： BOSE QuietComfort 25 有源消噪头戴式耳机 </p>
                                                </div>
                                                <i class="fas fa-cut fa-2x adv-cut"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="container ">
                        <div class="d-flex justify-content-end">
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#carouselExampleControls" aria-label="Previous" data-slide="prev">
                                            <i class="fas fa-arrow-circle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#carouselExampleControls" aria-label="Next" data-slide="next">
                                            <i class="fas fa-arrow-circle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>--}}
                </div>
                <div class="row adv-top-like">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card">
                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="card">
                                <img class="card-img-top " src="{{asset('/img/adv-1by1.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, quis!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- alert --}}
<div class="container my-5">
    <h3>Alert</h3>
    <div class="alert alert-danger alert-section" role="alert">
        This is a danger alert—check it out!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-success alert-section" role="alert">
        This is a danger alert—check it out!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
<hr>
{{-- card-vertical --}}
<div class="container my-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-vertical">
                <span class="badge badge-success badge-hot">Success</span>
                <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <div class="card-row-info">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-row-btn">
                        <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-vertical">
                <span class="badge badge-warning badge-hot">Success</span>
                <img class="card-img-top card-img-size img-thumbnail " src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <div class="card-row-info">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-row-btn">
                        <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-vertical">
                <span class="badge badge-danger">Success</span>
                <img class="card-img-top card-img-size" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <div class="card-row-info">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-row-btn">
                        <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <span>
                        <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    </span>
                    <span>

                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    </span>
                    <span>

                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-3">
    <div class="row">
        <div class="col-md-3">
            <div class="card card-vertical">
                <span class="badge badge-success badge-hot">Success</span>
                <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <div class="card-row-info">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-row-btn">
                        <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-vertical">
                <span class="badge badge-success badge-hot">Success</span>
                <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <div class="card-row-info">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-row-btn">
                        <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-vertical">
                <span class="badge badge-success badge-hot">Success</span>
                <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <div class="card-row-info">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-row-btn">
                        <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-vertical">
                <span class="badge badge-success badge-hot">Success</span>
                <img class="card-img-top card-img-size rounded-circle" src="{{asset('/img/boots.jpg')}}" alt="Card image cap">
                <div class="card-body text-center">
                    <div class="card-row-info">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-row-btn">
                        <a href="#" class="btn btn-main card-row-btn">点击购买</a>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- alert --}}
<div class="container my-3">
    <div class="alert alert-danger alert-section" role="alert">
        This is a danger alert—check it out!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-success alert-section" role="alert">
        This is a danger alert—check it out!
        <button type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
{{-- card-horizon --}}
<div class="container my-3">
    <div class="row">
        <div class="col-md-8">
            {{-- 1st --}}
            <div class="card-horizon">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail card-left-img" src="{{asset('/img/boots.jpg')}}" alt="">
                        <div class="card-right-footer text-center ">
                            <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                            <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                            <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                        </div>
                    </div>
                    <div class="col-md-6 card-right ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                        </div>
                        <div class="card-right-btn text-center ">
                            <a href="#" class="btn btn-main">点击购买</a>
                            <a href="#" class="btn btn-main-outline">价格对比</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 2nd --}}
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail card-left-img" src="{{asset('/img/boots.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right ">
                        <div class="card-body text-center">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                            <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                        </div>
                        <div class="card-right-btn text-center ">
                            <a href="#" class="btn btn-main">点击购买</a>
                            <a href="#" class="btn btn-main-outline">价格对比</a>
                        </div>
                    </div>
                </div>
                <div class="text-center card-right-footer-new ">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
            {{-- 3rd --}}
            <div class="card-horizon my-3">
                <div class="row">
                    <div class="col-md-6 card-left">
                        <img class="img-thumbnail card-left-img " src="{{asset('/img/nike1.jpg')}}" alt="">
                    </div>
                    <div class="col-md-6 card-right card-right-new ">
                        <ul class="nav nav-tabs mr-2" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">商品详情</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">商品对比</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main">点击购买</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="card-body text-center">
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                    <a class="card-link" href=""><i class="fas fa-link"></i>&nbsp;With supporting text below</a><br>
                                </div>
                                <div class="card-right-btn text-center ">
                                    <a href="#" class="btn btn-main-outline">价格对比</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center card-right-footer-new ">
                    <a href="#" class="card-link "><i class="far fa-heart"></i>&nbsp;赞</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;收藏</a>
                    <a href="#" class="card-link "><i class="far fa-share-square"></i>&nbsp;分享</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="main-adv"></div>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
<script src="/js/font-awesome.js"></script>
</body>
</html>