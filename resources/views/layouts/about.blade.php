@php
$settings=App\Models\Settings::get();
@endphp

		<section class="aboutus" id="aboutus">
			<div class="container">
				<div class="heading text-center">

				@foreach($settings as $about)

					
					<h2 class="animate shake">{{trans('main.about')}}</h2>
					
					<h3 class="animate slideInLeft">@if(Request::segment(1)=='ar') {{$about->about_us_ar}} @else {{ $about->about_us }} @endif</h3>
				</div>	

			    @endforeach

				<div class="row">
					<div class="col-md-6 animate rotateInDownRight">
						<div class="papers text-center">
							<img src="/front/img/aboutus.jpg" alt=""><br/>

						</div>
					</div>
					<div class="col-md-6 animate rotateInDownRight">
						<div class="papers text-center">

							<h4 class="notopmarg nobotmarg">Stephanie Hellen</h4>
							<p>
								هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>