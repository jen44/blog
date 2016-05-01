@extends('template')


@section('content')

        
           <!-- Post -->
    <article class="post">
        <header>
            <div class="title">
                <h2><a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a></h2>
                <p>{{$post->subtitle}}</p>
                 @if(Auth::check()!=true)
                @elseif(Auth::user()->admin_status)
                    <a href="{{url('post/'.$post->id.'/edit')}}"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('post/'.$post->id.'/delete')}}"><i class="fa fa-trash-o"></i></a>
                @endif
            </div>
            <div class="meta">
                <time class="published" datetime="{{date('d F, Y', strtotime($post->created_at))}}">{{date('d F, Y', strtotime($post->created_at))}}</time>
                <a href="{{url('posts/'.$post->id)}}" class="author"><span class="name">Jane Doe</span><img src="{{asset('images/avatar.jpg')}}" alt="" /></a>
            </div>
            
        </header>
        <a href="{{url('posts/'.$post->id)}}" class="image featured"><img src="{{asset('images/'.$post->photo)}}" alt="" /></a>
        <p>{{$post->content}}</p>

        <h2>Comments</h2>
        <br>
        
        @foreach($post->comments as $comment)
            <section>
                <h3>{{$comment->user->username}}</h3>
                <p>{{$comment->content}}</p>
            </section>
            
            
            
            @if(Auth::check() == false)
            <!-- if not logged in dont show none of the buttons-->
           
            @elseif($comment->user->id == Auth::user()->id)
               
                <a href="#"><i class="fa fa-pencil"></i></a>&nbsp;
                <a href="#"><i class="fa fa-trash-o"></i></a>
                <br>
                
            @elseif(Auth::user()->admin_status == 1)  
                 
                <a href="#"><i class="fa fa-pencil"></i></a>&nbsp;
                <a href="#"><i class="fa fa-trash-o"></i></a>
                <br>
                
            @endif
            
            
            <br>

        @endforeach


    <br>
     {!! Form::open(array('url' => 'posts'))!!}
       
        {{form::label('comment', 'Comment')}}
        {{form::text('comment')}}
        {!! $errors->first('comment')!!}
        
        <br>
        
        {{form::submit('Post')}}
        
     {!! Form::close()!!}




    </article>







    <!-- Pagination -->
    <ul class="actions pagination">
    <li><a href="" class="disabled button big previous">Previous Page</a></li>
    <li><a href="#" class="button big next">Next Page</a></li>
    </ul>




@stop