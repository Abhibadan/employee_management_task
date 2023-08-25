@extends('layout.main')
@section('body')
<div class="row ">
        @foreach ($users as $user) 
            <div class="col-6 d-flex justify-content-center">
                {{$user->name}}
            </div>
            <div class="col-6 d-flex justify-content-center">
                {{$user->email}}
            </div>
        @endforeach
    
</div>
<div>
    <div class="col-12 ">
        {!! $users->links("pagination::bootstrap-5") !!}
    </div>
    
</div>
@endsection
        
       