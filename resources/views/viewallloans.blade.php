@extends('layoutlibstud')
@section('content')
    {{--<div class="row" style="text-align: justify">--}}
    {{--<div class=col-sm-5">--}}
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">User ID</th>
            <th scope="col">Book ID</th>
            <th scope="col">Date Issued</th>
            <th scope="col">Return Date</th>
            {{--<th scope="col">Borrow?</th>--}}
        </tr>

        </thead>
        <tbody>
        @foreach ($loan as $loan)
            <tr>
                <th scope="row">
                     {{--<td name="serial_id">{{$loan->id}}</td>--}}
                     <td name="user_id">{{$loan->user_id}}</td>
                     <td name="book_id">{{$loan->book_id}}</td>
                     <td name="due_date">{{$loan->due_date}}</td>
                     <td name="returned_date">{{$loan->returned_date}}</td>

                </th>
            </tr>
            <br>
        @endforeach

        </tbody>
    </table>
    {{--</div>--}}
    {{--</div>--}}
@endsection
