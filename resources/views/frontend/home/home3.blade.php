@extends('frontend.layouts.app3')
@section('content')
    {{--@include('frontend.home._adv-top')--}}
    @include('frontend.home.components._slide_adv2')
    @include('frontend.home.components._long_adv')
    @include('frontend.home.components._discount')
@stop
@section('script')
    <script>
	    $('#adv-home-slide').carousel({
		    interval: 9000
	    });
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