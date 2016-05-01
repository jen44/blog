<!DOCTYPE HTML>
<html>
	<head>
		<title>Future Imperfect</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('css/main.css')}}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">
                
                

				<!-- Header -->
					<header id="header">
						<h1><a href="{{url('posts/all')}}">Future Imperfect</a></h1>
						<nav class="links">
							<ul>
							
							
				@if(Auth::check())
                        <li><a href="{{url('posts/all')}}">Home</a></li>    
                        <li><a href="{{url('users/'.Auth::user()->id)}}">Profile</a></li>
                        @if(Auth::user()->admin_status)
                        <li><a href="{{url('myposts')}}">My posts</a></li>
                        <li><a href="{{url('posts/create')}}">Create post</a></li>
                        
                        @else
                        <li><a href="{{url('users/'.Auth::user()->id.'/comments')}}">My comments</a></li>
                        
                        @endif
                        <li><a href="{{url('logout')}}">Logout</a></li>
                    </ul>
                </nav>
                <nav class="main">
                    <ul>

                        <li class="menu">
                            <a class="fa-bars" href="#menu">Menu</a>
                        </li>
                    </ul>
                </nav>
            </header>

        <!-- Menu -->
            <section id="menu">



                <!-- Links -->
                    <section>
                        <ul class="links">
                            <li>
                                <a href="{{url('posts/all')}}">
                                    <h3>Home</h3>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('users/'.Auth::user()->id)}}">
                                    <h3>Profile</h3>
                                </a>
                            </li>
                            
                         
                        @if(Auth::user()->admin_status)
                            <li>
                                <a href="{{url('users/'.Auth::user()->id.'/posts')}}">
                                    <h3>My posts</h3>
                                </a>
                            </li>
                           
                             
                        @endif
                            <li>
                                <a href="{{url('users/'.Auth::user()->id.'/comments')}}">
                                    <h3>My comments</h3>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('logout')}}">
                                    <h3>Logout</h3>
                                </a>
                            </li>

                        </ul>
                    </section>

				@else			
							
							
                        <li><a href="{{url('posts/all')}}">Home</a></li>
                        <li><a href="{{url('login')}}">Log in</a></li>
                        <li><a href="{{url('users/register')}}">Register</a></li>
                    </ul>
                </nav>
                <nav class="main">
                    <ul>

                        <li class="menu">
                            <a class="fa-bars" href="#menu">Menu</a>
                        </li>
                    </ul>
                </nav>
            </header>

        <!-- Menu -->
            <section id="menu">



                <!-- Links -->
                    <section>
                        <ul class="links">
                           <li>
                                <a href="{{url('posts/all')}}">
                                    <h3>Home</h3>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('login')}}">
                                    <h3>Log in</h3>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('users/register')}}">
                                    <h3>Register</h3>
                                </a>
                            </li>

                        </ul>
                    </section>


            
            @endif
            
            
            </section>
            
            

				<!-- Main -->
					<div id="main">

                
                @yield('content')
                
                
                </div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="{{url('posts/all')}}" class="logo"><img src="{{asset('images/logo.jpg')}}" alt="" /></a>
								<header>
									<h2>More kitty</h2>
									<p>Play time hopped up on catnip hide when guests come over</a></p>
								</header>
							</section>

						

						
						

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright">&copy; Untitled. Crafted: <a href="http://designscrazed.org/">HTML5</a>.</p>
							</section>

					</section>

			</div>

		<!-- Scripts -->
		    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="{{asset('js/jquery.min.js')}}"></script>
			<script src="{{asset('js/skel.min.js')}}"></script>
			<script src="{{asset('js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>