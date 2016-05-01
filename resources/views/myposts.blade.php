@extends('template')


@section('content')

        
           <!-- Post -->
    
        
        @foreach($posts as $post)
                
    <article class="post">
        <header>
            <div class="title">
                <h4><a href="{{url('posts/'.$post->id)}}">{{$post->title}}</a></h4>    
            </div>
            
            <div class="meta">
               
                <time class="published" datetime="{{date('d F, Y', strtotime($post->created_at))}}">{{date('d F, Y', strtotime($post->created_at))}}</time>
                
            </div>
            
        </header>
        
        
     </article>
    <br>
           
        @endforeach


    
     



   







    <!-- Pagination -->
    <ul class="actions pagination">
    <li><a href="" class="disabled button big previous">Previous Page</a></li>
    <li><a href="#" class="button big next">Next Page</a></li>
    </ul>




@stop