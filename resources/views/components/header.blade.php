	<!--header-->
	<header>
	    @foreach ($header as $item)
	    <div class="banner row" id="banner">
	        <div class="parallax text-center" style="background-image: url({{'storage/'.$item->banniere}});">
	            <div class="parallax-pattern-overlay">
	                <div class="container text-center" style="height:600px;padding-top:170px;">
	                    <a href="#"><i id="site-title" class="{{'wow fadeInDown '.$item->icone.' fa-5x'}}"
	                            wow-data-delay="0.0s" wow-data-duration="0.9s"></i></a>
	                    <h2 class="intro wow zoomIn" wow-data-delay="0.4s" wow-data-duration="0.9s">{{$item->titre}}</h2>
	                </div>
	            </div>
	        </div>
	    </div>
	    @endforeach
	    <div class="menu">
	        <div class="navbar-wrapper">
	            <div class="container">
	                <div class="navwrapper">
	                    <div class="navbar navbar-inverse navbar-static-top">
	                        <div class="container">
	                            <div class="navArea">
	                                <div class="navbar-collapse collapse">
	                                    <ul class="nav navbar-nav">
	                                        <li class="menuItem active"><a href="#wrapper">Home</a></li>
	                                        <li class="menuItem"><a href="#aboutus">About Us</a></li>
	                                        <li class="menuItem"><a href="#specialties">Specialties</a></li>
	                                        <li class="menuItem"><a href="#feedback">Feedback</a></li>
	                                        <li class="menuItem"><a href="#contact">Hire Us</a></li>
	                                        @guest
	                                        <li class="menuItem">
	                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
	                                        </li>
	                                        @if (Route::has('register'))
	                                        <li class="menuItem">
	                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
	                                        </li>
	                                        @endif
	                                        @endguest

	                                        @if (Auth::check())
	                                        
	                                        <li class="menuItem">
	                                            <a class="nav-link" href="{{ route('profile') }}">Profile</a>
	                                        </li>
	                                        <li class="dropdown">
	                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
	                                                role="button" data-toggle="dropdown" aria-haspopup="true"
	                                                aria-expanded="false" v-pre>
	                                                {{ Auth::user()->prenom }} <span class="caret"></span>
	                                            </a>

	                                            <div class="dropdown-menu dropdown-menu-right"
	                                                aria-labelledby="navbarDropdown">
	                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
																			 document.getElementById('logout-form').submit();">
	                                                    {{ __('Logout') }}
	                                                </a>

	                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
	                                                    style="display: none;">
	                                                    @csrf
	                                                </form>
	                                            </div>
											</li>
											@if (Auth::user()->id_role==1)
	                                        <li class="menuItem">
											<a id="admin" class="nav-link" href="{{route('admin')}}">Admin</a>
											</li>
											@endif
	                                        @endif
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>
