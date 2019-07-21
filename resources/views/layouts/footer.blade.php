@php
$social=App\Models\social::get();
@endphp

		<section class="footer" id="footer">
			<p class="text-center">
				<a href="#home" class="gototop animate shake"><i class="fa fa-angle-double-up fa-2x"></i></a>
			</p>
			<div class="container animate fadeInDown">
			@foreach($social as $social)

				<ul>
					<li><a href="{{ $social->twitter }}" ><i class="fa fa-twitter"></i></a></li>
					<li><a href="{ $social->facebook }}"><i class="fa fa-facebook"></i></a></li>
					<li><a href="{{ $social->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="{{ $social->pinterest }}"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="{{ $social->flickr }}"><i class="fa fa-flickr"></i></a></li>
				</ul>
			</div>
			@endforeach
		</section>