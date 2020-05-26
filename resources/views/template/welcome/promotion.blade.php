
	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">

@if (empty($ready))
	<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="" class="site-btn btn-2">Browse</a>
					</div>
				</div>
				
				@else
				
				<div class="col-md-9">
					<h2>{{$ready->titre}}</h2>
					<p>{{$ready->sousTitre}}</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="{{route('contact')}}" class="site-btn btn-2">{{$ready->linkVideo}}</a>
					</div>
				</div>
				@endif
			</div>
				
			</div>
		</div>
	</div>
	<!-- Promotion section end-->
		</div>
	</div>
	<!-- Promotion section end-->	

			