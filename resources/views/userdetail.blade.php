@extends('template')


@section('content')

                           <!-- Post -->
							<article class="post">
								
								
								<h3>First Name</h3>
								<p>{{$user->firstname}}</p>
								<h3>Last Name</h3>
								<p>{{$user->lastname}}</p>
								<h3>Email</h3>
								<p>{{$user->email}}</p>
								<h3>Username</h3>
								<p>{{$user->username}}</p>
								<a href="{{url('users/'.$user->id.'/edit')}}">Edit Profile</a>

								
							</article>




@stop