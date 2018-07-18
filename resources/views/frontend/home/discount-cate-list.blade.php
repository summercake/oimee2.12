@extends('frontend.layouts.app3')
@section('content')
    <div class="container">
        @include('frontend.home.components._long_adv')
        <div class="row">
            <div class="col-8">
                <h4>一共为您搜索到xxx条折扣信息</h4>
                @include('frontend.home.components.single-dis-info-row')
                @include('frontend.home.components.nest-dis-info-row')
                @include('frontend.home.components._long_adv')
                @include('frontend.home.components.single-dis-info-row')
                @include('frontend.home.components.nest-dis-info-row')
                @include('frontend.home.components._long_adv')
                @include('frontend.home.components.single-dis-info-row')
                @include('frontend.home.components.nest-dis-info-row')
                @include('frontend.home.components._long_adv')
                @include('frontend.home.components.single-dis-info-row')
                @include('frontend.home.components.nest-dis-info-row')
                @include('frontend.home.components._long_adv')
                @include('frontend.home.components.single-dis-info-row')
                @include('frontend.home.components.nest-dis-info-row')
                @include('frontend.home.components._long_adv')
                @include('frontend.home.components.single-dis-info-row')
                @include('frontend.home.components.nest-dis-info-row')
                @include('frontend.home.components._long_adv')
            </div>
            <div class="col-4">
                @include('frontend.layouts._dis-info-right')
            </div>
        </div>
    </div>
@stop
@section('script')
    <script>
		$('#show-more').on('click', function() {
			$('.cards-row-hidden').css('display', 'block');
			$('#show-more').css('display', 'none');
			$('#hide-more').css('display', 'block');
		});
		$('#hide-more').on('click', function() {
			$('.cards-row-hidden').css('display', 'none');
			$('#hide-more').css('display', 'none');
			$('#show-more').css('display', 'block');
		});
    </script>
@endsection