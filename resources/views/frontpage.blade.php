@extends('template')


@section('content')

                            <!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Magna sed adipiscing</a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="" class="author"><span class="name">Jane Doe</span><img src="{{asset('images/avatar.jpg')}}" alt="" /></a>
									</div>
								</header>
								<a href="blogpost.html" class="image featured"><img src="{{asset('images/pic01.jpg')}}" alt="" /></a>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
								<footer>
									<ul class="actions">
										<li><a href="blogpost.html" class="button big">Continue Reading</a></li>
									</ul>
								
								</footer>
							</article>

							





						

						    <!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>





@stop