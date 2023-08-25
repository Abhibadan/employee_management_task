@extends('layout.main')
@section('body')
{!! Form::open([
    'url'=>route('authenticate_admin'),
    'method'=>'post',
    'id'=>'form',
    'role'=>'form'])!!}
<div class="row justify-content-md-center">
    <div class="col-4 d-flex justify-content-center">
        <label for="name">Name</label>
    </div>
    <div class="col-4 d-flex justify-content-center">
        {!! Form::text('name', '', ['placeholder'=>'name']) !!}
        <span class="error">
            @error('name')
                *{{$message}}
            @enderror
        </span>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-4 d-flex justify-content-center">
        <label for="email">Email</label>
    </div>
    <div class="col-4 d-flex justify-content-center">
        {!! Form::email('email', '', ['placeholder'=>'email']) !!}
        <span class="error">
            @error('email')
                *{{$message}}
            @enderror
        </span>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-4 d-flex justify-content-center">
        <label for="password">Passowrd</label>
    </div>
    <div class="col-4 d-flex justify-content-center">
        {!! Form::password('password', ['placeholder'=>'password']) !!}
        <span class="error">
            @error('password')
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
@endsection
        
       