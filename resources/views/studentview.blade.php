@extends('layoutlibstud')
@section('content')
    <h1>Welcome {{Session::get('username')}}</h1>

    <div class="container">
        <p>
            <a href="{{url('/viewallshelves')}}" class="btn btn-info" role="button">View all shelves</a>
        </p>
    </div>
@endsection