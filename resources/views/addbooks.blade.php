@extends('layoutlibstud')
@section('content')
    <h3 align="center">Welcome Librarian</h3>
    <form method="POST">
        {!! csrf_field() !!}
    <div class="form-group"> <!-- Book Name -->
    <label for="book_name" class="control-label">Book Name:</label>
    <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Shakespeare" required>
    </div>

    <div class="form-group"> <!-- Author -->
    <label for="author" class="control-label">Author:</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="J.K.Rowling" required>
    </div>



    <div class="form-group"> <!-- Category -->
    <label for="shelf" class="control-label">Category</label>
    <select class="form-control" id="shelf"  name="shelf" required>
    <option value="Art">Art</option>
    <option value="Science">Science</option>
    <option value="Sport">Sport</option>
    <option value="Literature">Literature</option>

    </select>
    </div>


    <div class="form-group"> <!-- Submit Button -->
    <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">Add Books</button>
    </div>

    </form>
@endsection