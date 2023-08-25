@extends('layout.main')
@section('body')
<div class="row justify-content-md-center">
    <div class="col-12 d-flex justify-content-center">
        <a class='link' href='{{route('user1')}}'><button class="btn btn-primary home-button">user1</button></a>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col-12 d-flex justify-content-center">
        <a class='link' href='{{route('admin')}}'><button class="btn btn-success home-button">Admin</button></a>
    </div>
</div>
@endsection
        
       