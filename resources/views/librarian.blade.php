@extends('layoutlibstud')
@section('content')
    <h3 align="center">Welcome {{Session::get('username')}}</h3>


    <div class="container">
        <p>
            <a href="{{url('addbooks')}}" class="btn btn-info" role="button">Add Books</a>
        </p>
        <p>
            <a href="{{url('deletebooks')}}" class="btn btn-info" role="button">Delete Books</a>
        </p>
        <p>
            <a href="{{url('viewallloans')}}" class="btn btn-info" role="button">View Loans</a><br>
        </p>
       <p>
           <a href="{{url('viewallshelves')}}" class="btn btn-info" role="button">View all shelves</a>
       </p>
    </div>


@endsection