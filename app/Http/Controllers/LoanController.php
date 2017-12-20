<?php

namespace App\Http\Controllers;

use App\Book;
use App\Loan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class LoanController extends Controller
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
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $book = Book::where('book_id',$request->book_id)->first();
        $user = Session::get('username');
        $username = User::where('username', $user)->first();
        $book = Book::where('id',$request->borrow_id)->first();
        $book->update(["availability"=>0]);
//        $current = Carbon::now();
//        $seven = $current->addDays(7);
//       var_dump($current->toDateTimeString(). "\n");
//        var_dump($current->addDays(7)->toDateTimeString());

        DB::table('loans')->insert(array("user_id"=>$username->id, "book_id"=> $request->borrow_id, "due_date"=>Carbon::now(), "returned_date"=>Carbon::now()->addDays(7)));

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $loan = DB::table('loans')->get();
        return view('viewallloans', compact('loan'));
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
    public function destroy($id)
    {
        //
    }
}
