@extends('template')


@section('content')

 <!-- Post -->
    <article class="post">
        <h2>Edit Profile</h2>
        

        {!! Form::model($user, array('url' => 'users/'.$user->id, 'method' => 'put')) !!}


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

            <br>
            {{form::submit('Update')}}
            
            
        {!! Form::close()!!}


    </article>





@stop