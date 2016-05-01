@extends('template')


@section('content')

                           

               <!-- Post -->
        <article class="post">
            <h2>Log in</h2>
            
            {!! Form::open(array('url' => 'login')) !!}
                
                {{form::label('username', 'Username')}}
                {{form::text('username')}}
                {!! $errors->first('username', '<p class="error">:message</p>') !!}
                
                {{form::label('password', 'Password')}}
                {{form::password('password')}}
                {!! $errors->first('password', '<p class="error">:message</p>') !!}
                <br>
                
                {{form::submit('Login')}}
                
            {!! Form::close() !!}
               
            {{Session::get('message')}}   
                
        </article>


@stop