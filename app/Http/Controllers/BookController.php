<?php

namespace App\Http\Controllers;

use App\Book;
use App\Loan;
use App\Shelf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
       // var_dump($request->all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $message=[
          'required' => 'This :attribute field is Required!'
        ];
        $validate=[
          'book_name' => 'required',
          'author' => 'required',
          'shelf' => 'required',
        ];

//        $shelf_book = Book::find($request->shelf)->first();
        $shelf = Shelf::where('shelf_name',$request->shelf)->first();
//        var_dump($shelf->shelf_name);
        if($request->has('shelf')){
            if($request->shelf == $shelf->shelf_name) {
                $request->merge(['shelf_id' => $shelf->id]);
            }else if($request->shelf == $shelf->shelf_name){
                $request->merge(['shelf_id'=>$shelf->id]);
            }else if($request->shelf==$shelf->shelf_name){
                $request->merge(['shelf_id'=>$shelf->id]);
            }else if($request->shelf == $shelf->shelf_name){
                $request->merge(['shelf_id'=>$shelf->id]);
            }else{
                redirect('/addbooks');
            }
        }else{
            redirect('/addbooks');
        }

        $this->validate($request, $validate, $message);
        Book::create($request->all());


        return redirect('/librarian');
    }

//    public function borrow($book_id){
//        Book::find($book_id)->update(['availability'=>0]);
//    }


    /**
     * Display the database table
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $book = DB::table('books')->get();
        return view('viewallshelves', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $message=[
            'required' => ":attribute field is Required!"
        ];
        $validate=[
            'book_id' => 'required',
        ];

        $this->validate($request,$validate, $message);
         $book = Book::findOrFail($request->book_id);
        $book->delete();


         return redirect('/librarian');
//        redirect('/librarian');
//        return Book::all();
    }
}
