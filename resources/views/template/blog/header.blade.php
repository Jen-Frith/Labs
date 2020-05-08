	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				@if ($link==null)

				<li><a href="{{route('welcome')}}">Home</a></li>
				<li><a href="{{route('services')}}">Services</a></li>
				<li class="active"><a href="{{route('blog')}}">Blog</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
				<li><a href="{{route('elements')}}">Elements</a></li>

				@else
				<li><a href="{{route('welcome')}}">Home</a></li>
				<li><a href="{{route('services')}}">{{$link->linkTitle1}}</a></li>
				<li class="active"><a href="{{route('blog')}}">{{$link->linkTitle2}}</a></li>
				<li><a href="{{route('contact')}}">{{$link->linkTitle3}}</a></li>
				<li><a href="{{route('elements')}}">{{$link->linkTitle4}}</a></li>	
				@endif
				




				@guest
				<li class="nav-item">
					<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
				</li>
				@if (Route::has('register'))
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
					</li>
				@endif
			@else
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->name }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('logout') }}"
						   onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
							{{ __('Logout') }}
						</a>

						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							@csrf
						</form>
					</div>
				</li>
			@endguest




			</ul>
		</nav>
	</header>
	<!-- Header section end -->