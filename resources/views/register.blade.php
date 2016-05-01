@extends('template')


@section('content')

<article class="post">
    <h2>Register</h2>

    {!! Form::open(array('url' => 'users'))!!}
        
        {{form::label('firstname', 'Firstname')}}
        {{form::text('firstname')}}
        {!! $errors->first('firstname', '<p class="error">:message</p>') !!}
        
        {{form::label('lastname', 'Lastname')}}
        {{form::text('lastname')}}
        {!! $errors->first('lastname', '<p class="error">:message</p>') !!}
        
        {{form::label('email', 'Email')}}
        {{form::text('email')}}
        {!! $errors->first('email', '<p class="error">:message</p>') !!}
        
        {{form::label('username', 'Username')}}
        {{form::text('username')}}
        {!! $errors->first('username', '<p class="error">:message</p>') !!}
        
        {{form::label('password', 'Password')}}
        {{form::password('password')}}
        {!! $errors->first('password', '<p class="error">:message</p>') !!}
    
        {{form::label('confirmpassword', 'Confirm Password')}}
        {{form::password('password_confirmation')}}
        {!! $errors->first('password_confirmation', '<p class="error">:message</p>') !!}
        
        
        <br>
        {{form::submit('Register')}}
        
        
        
    {!! Form::close()!!}
    
    
</article>



@stop