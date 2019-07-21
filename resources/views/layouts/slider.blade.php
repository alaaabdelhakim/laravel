@php
$slider=App\Models\Slider::get();
@endphp

		<section class="slider" id="home">
			<div class="container-fluid">
				<div class="row">
					<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="header-backup"></div>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							@foreach($slider as $row)
							<div class="item active">
								<img src="/images/slider/{{$row->image}}" alt="">
								<div class="carousel-caption animate slideInLeft">
									<h1>@if(Request::segment(1)=='ar') {{$row->name_ar}} @else {{ $row->name }} @endif</h1>
									<p>@if(Request::segment(1)=='ar') {{$row->decs_ar}} @else {{ $row->decs }} @endif</p>
									@if($row->button)
									<button ><a class="buttontext" href="{{$row->button_link}}" target="_blank"> @if(Request::segment(1)=='ar') {{$row->button_ar}} @else {{ $row->button }} @endif </a></button>
									@endif
								</div>
							</div>
							@endforeach
						</div>
						<!-- Controls -->
						<a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">{{trans('main.previous')}}</span>
						</a>
						<a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">{{trans('main.next')}}</span>
						</a>
					</div>
				</div>
			</div>
		</section>