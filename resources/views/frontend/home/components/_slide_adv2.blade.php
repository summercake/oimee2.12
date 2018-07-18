<div class="container">
    <div class="row" id="adv-first">
        <div class="col-4">
            <h5 id="tags">
                <a href="" class="section-btn ">热门推荐</a>
                <a href="" class="section-btn ">最多关注</a>
            </h5>
        </div>
        <div class="col-8 slide-indicator text-right" id="adv-second">
            <a class=" text-primary" href="#adv-home-slide" role="button" data-slide="next">
                <i class="fas fa-angle-double-left"></i>
            </a>
            <a class=" text-primary" href="#adv-home-slide" role="button" data-slide="prev">
                <i class="fas fa-angle-double-right"></i>
            </a>
            {{--<ol class="carousel-indicators">--}}
                {{--<li data-target="#adv-home-slide" data-slide-to="0" class="active"></li>--}}
                {{--<li data-target="#adv-home-slide" data-slide-to="1"></li>--}}
                {{--<li data-target="#adv-home-slide" data-slide-to="2"></li>--}}
            {{--</ol>--}}
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <a href="">
                <img src="{{asset('/img/nike2.jpeg')}}" alt="" class="img-fluid">
            </a>
        </div>
        <div class="col-8">
            <div class="adv-top-section">
                <div class="adv-top-hot">
                    <div id="adv-home-slide" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
                                    </div>
                                    <div class="col-3">
                                        <a href="">
                                            @include('frontend.home.components._card')
                                        </a>
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
            </div>
        </div>
    </div>
</div>