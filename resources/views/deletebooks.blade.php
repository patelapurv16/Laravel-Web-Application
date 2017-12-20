@extends('layoutlibstud')
@section('content')

    <form method="POST">
        {!! csrf_field() !!}
        <div class="form-group"> <!-- Delete Book  -->
            <label for="book_id" class="control-label">Book ID:</label>
            <input type="text" class="form-control" id="book_id" name="book_id" placeholder="ENTER BOOK ID" required>
        </div>


        <div class="form-group"> <!-- Submit Button -->
            <button type="submit" value="submit" name="submit" id="submit" class="btn btn-danger">Delete Book</button>
        </div>

    </form>
@endsection
