		<section class="contact" id="contact">
			<div class="container">
				<div class="heading">	
					<h2 class="animate shake">{{trans('main.contact')}}</h2>
					<div class=" animate slideInLeft">
						<div class="col-md-4">
							<h4> <i class="fa fa-envelope"></i> البريد الالكتروني</h4>
							<p>hsco@hsco.com</p>
						</div>
						<div class="col-md-4">
							<h4> <i class="fa fa-phone"></i> الهاتف</h4>
							<p>+55 222 5551</p>
						</div>
						<div class="col-md-4">
							<h4> <i class="fa fa-map-marker"></i> الموقع</h4>
							<p> loream ipsum loream ipsum loream ipsum</p>
						</div>
						</div>
					</div>
				</div>
			<div class="container w960">
				<div class="row">
					<form id="contactform">
						@csrf
						<input name="name" type="text" class="contact col-md-6 animate slideInLeft" placeholder="{{trans('main.name')}}" required="">
						<input name="email" type="email" class="contact noMarr col-md-6 animate slideInLeft" placeholder="{{trans('main.email')}}" required="">
						<textarea name="comment" class="contact col-md-12 animate slideInLeft" placeholder="{{trans('main.message')}}" required=""></textarea>
						<input type="submit" id="submit" class="contact submit animate fadeInDown" value="{{trans('main.send')}}">
					</form>
				</div>
			</div>
		</section>
		<!----->