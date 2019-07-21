@php
$products=App\Models\Products::get();
@endphp


		<section class="specialties" id="Products">
			<div class="container">
				<div class="heading text-center">
					
					<h2 class="animate shake">{{trans('main.ourproducts')}}</h2>
					
					<h3 class="animate slideInLeft">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
			إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
			ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.</h3>
				</div>

               @foreach($products as $product)

				<div id="grid-gallery" class="grid-gallery">
					<section class="grid-wrap">
						<ul class="grid">
							<li class="grid-sizer"></li><!-- for Masonry column width -->				
							<li class="animate rotateInDownRight">
								<figure>
									<img src="/images/products/{{$product->image}}" alt=""/>
									<figcaption><h3>@if(Request::segment(1)=='ar') {{$product->name_ar}} @else {{ $product->name }} @endif</h3><p> @if(Request::segment(1)=='ar') {{$product->decs_ar}} @else {{ $product->decs }} @endif </p></figcaption>
								</figure>
							</li>
						</ul>
					</section><!-- // end small images -->
				</div><!-- // grid-gallery -->
								@endforeach

			</div>
		</section>