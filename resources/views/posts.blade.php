@extends('template')


@section('content')

        
                           
            @foreach($posts as $post)
            <!-- Post -->
            <article class="post">
                <header>
                    <div class="title">
                        <h2>
                            <a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a>
                        </h2>
                        <p>{{$post->subtitle}}</p>
                        @if(Auth::check()==false)
                        @elseif(Auth::user()->admin_status)
                            <a href="#"><i class="fa fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-trash-o"></i></a>
                        @endif
                    </div>
                    <div class="meta">
                        <time class="published" datetime="{{date('d F, Y', strtotime($post->created_at))}}">{{date('d F, Y', strtotime($post->created_at))}}</time>
                        <a href="" class="author">
                            <span class="name">Jane Doe</span>
                            <img src="{{asset('images/avatar.jpg')}}" alt="" />
                        </a>
                    </div>
                </header>
                
                
                <a href="{{url('posts/'.$post->id)}}" class="image featured">
                    <img src="{{asset('images/'.$post->photo)}}" alt="" />
                </a>
                <p>{{str_limit($post->content, $limit = 200, $end = '...')}}</p>
                
                   
                   
                <footer>
                    <ul class="actions">
                        <li>
                            <a href="{{url('posts/'.$post->id)}}" class="button big">Continue Reading</a>
                        </li>
                    </ul>
                </footer>
                
            </article>


            @endforeach


@stop