@extends('layoutlibstud')
@section('content')
    {{--<div class="row" style="text-align: justify">--}}
        {{--<div class=col-sm-5">--}}
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Book ID</th>
                        <th scope="col">Book Name</th>
                        <th scope="col">Author</th>
                        <th scope="col">Availibility</th>
                        <th scope="col">Borrow?</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($book as $book)

                        <tr>
                            <th scope="row">
                                <td name="book_id">

                                {{$book->id}}</td>

                                <td name="book_name">{{$book->book_name}}</td>
                                <td name="author">{{$book->author}}</td>
                                <td name="availability">{{$book->availability}}</td>
                            @if($book->availability == 0)
                                <td>

                                        <button type="submit" class="btn btn-danger">BORROWED</button>


                                </td>
                            @else
                                    <td>
                                        <form action="/viewallshelves" method="post">
                                            {{csrf_field()}}
                                            <button  formaction="viewallshelves"  value = "{{$book->id}}" name="borrow_id"  class="btn btn-primary">BORROW</button>
                                        </form>


                                    </td>
                            @endif
                            </th>
                        </tr>
                        <br>
                    @endforeach

                </tbody>
            </table>
        {{--</div>--}}
    {{--</div>--}}
@endsection
