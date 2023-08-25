<!DOCTYPE html>
<html>
    <head>
        <title>test_project1</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css"/>
    </head>
</html>
<body>
    <div class="navbar">
        <h1>Test Prject 1</h1>
        {!! Form::open([
            'url'=>route('admin_logout'),
            'method'=>'post',
            'id'=>'form',
            'role'=>'form',
        ]) !!}
             @if(empty(session()->get('email'))) 
                
                @php 
                    $visibility='hidden'  
                @endphp
            @else
                
                @php
                    $visibility='visible'
                @endphp
            @endif
            <button  type="submit" class="btn btn-danger" id="logout" style="visibility:{{$visibility}}">logout</button>
        {!! Form::close() !!}
    </div>
    <div class="container">