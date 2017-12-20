@extends('layout')
@section('content')
    <div class="container">
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
        @endif
        <form class="form-horizontal" action="register_action" method="POST">
            {!! csrf_field() !!}
            <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" value="{{old('username')}}" placeholder="Enter Username" name="username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="password">Confirm Password:</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" placeholder="Enter password" name="cpassword">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="phonenumber">Phone Number:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{old('phonenumber')}}" id="phonenumber" placeholder="Enter Cell Number" name="phonenumber">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email"  value="{{old('email')}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label> <input type="checkbox" value ='1' name="librarian">librarian</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection