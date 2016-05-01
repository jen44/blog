@extends('template')


@section('content')


<!-- Post -->
    <article class="post">
        <h2>Create Post</h2>
        
        
        {!! Form::open(array('url' => 'posts', 'files' => true))!!}

            {{form::label('title', 'Title')}}
            {{form::text('title')}}
            {!! $errors->first('title')!!}


            {{form::label('subtitle', 'Subtitle')}}
            {{form::text('subtitle')}}
            {!! $errors->first('subtitle')!!}


            {{form::label('content', 'Content')}}
            {{form::text('content')}}
            {!! $errors->first('content')!!}


            {{form::label('photo', 'Image')}}
            {{form::file('photo')}}
            {!! $errors->first('photo')!!}
            <br>
            <br>

            {{form::submit('Post')}}


        {!! Form::close() !!}
        
    </article>







@stop