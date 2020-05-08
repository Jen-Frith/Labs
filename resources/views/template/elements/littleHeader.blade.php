	<!-- Page header -->
	<div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
@if ($link==null)
<h2>Elements</h2>
<div class="page-links">
	<a href="{{route('welcome')}}">Home</a>
	<span>Elements</span>
</div>

@else
	<h2>{{$link->linkTitle4}}</h2>
				<div class="page-links">
					<a href="{{route('welcome')}}">Home</a>
					<span>{{$link->linkTitle4}}</span>
				</div>
@endif

				
			</div>
		</div>
	</div>
	<!-- Page header end-->