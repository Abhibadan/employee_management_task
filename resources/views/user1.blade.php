@extends('layout.main')
@section('body')
{!! Form::open([
    'url'=>route('user1_request'),
    'method'=>'post',
    'id'=>'form',
    'role'=>'form'])!!}
<div class="row ">
    <div class="col-6 d-flex justify-content-center">
        <label for="name">Name</label>
        {!! Form::text('name', '', ['placeholder'=>'name']) !!}
        <span class="error">
            @error('name')
                *{{$message}}
            @enderror
        </span>
    </div>
    <div class="col-6 d-flex justify-content-center">
        <label for="email">Email</label>
        {!! Form::email('email', '', ['placeholder'=>'email']) !!}
        <span class="error">
            @error('email')
                *{{$message}}
            @enderror
        </span>
    </div>
</div>
<div class="row">
    <div class="col-6 d-flex justify-content-center">
        <label for="password">Passowrd</label>
        {!! Form::password('password', ['placeholder'=>'password']) !!}
        <span class="error">
            @error('password')
                *{{$message}}
            @enderror
        </span>
    </div>
    <div class="col-6 d-flex justify-content-center">
        <label for="confirm_password">Password</label>
        {!! Form::password('password_confirmation', ['placeholder'=>'reenter password']) !!}
        <span class="error">
            @error('password_confirmation')
                *{{$message}}
            @enderror
        </span>
    </div>
</div>
<div class="row">
    <div class="col-12 d-flex justify-content-center">
        {!! Form::submit('Submit', ['class'=>'btn btn-success']) !!}
    </div>
</div>
{!! Form::close() !!}
@endsection
        
       