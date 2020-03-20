<!--specialties-->
<section class="specialties" id="specialties">
	<div class="container">
		@foreach ($spec as $item)
			
		<div class="heading text-center">
			<img class="dividerline" src="img/sep.png" alt="">
			<h2>{{$item->titre}}</h2>
			<img class="dividerline" src="img/sep.png" alt="">
			<h3>{{$item->description}}</h3>
		</div>
		@endforeach
		<div class="row">
			@foreach ($categories as $cat)
				
			
			<div class="col-md-4">
				<div class="restmenuwrap">
				<h3 class="maincat notopmarg text-center">{{$cat->categorie}}</h3>
					@foreach ($specials as $item)
						
					@if ($item->id_cat==$cat->id)
						
					
					<div class="restitem clearfix">
						<div class="rm-thumb" style="background-image: url({{asset('storage/'.$item->logo)}})">
						</div>
					<h5>{{$item->titre}}</h5>
						<p>
							{{$item->description}}
						</p>
					</div>
					@endif
					@endforeach
				</div>
			</div>
			@endforeach
		</div>
	</div>
	</section>
	