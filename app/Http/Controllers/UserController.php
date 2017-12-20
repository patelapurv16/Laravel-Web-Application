<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
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

    public function login(Request $request)
    {

        $user = User::where('username', '=', Input::get('username'))->first();
//        if($user != Session::get('username')){
//            Session::flush('username');
//
//        }

//        if($user->first()==null){
//            return redirect('/login')->with(['message' => 'Username not found']);
//        }else{
//            if($request->password == $user->password){
//                if($user->librarian == 1){
//                    return view('/librarian');
////                    redirect('/librarian');
//                }else{
//                    return view('/studentview');
////                    redirect('/studentview');
//                }
//            }else{
//                return redirect('/login');
//            }
//        }
//    }
        if ($user != NULL) {
            if ($request->password == $user->password) {
                Session::put('username', $user->username);
                if ($user->librarian == 1) {
                    return view('/librarian');

                } else {
                    return view('/studentview');

                }
            } else {
                return redirect('/login');
            }
        }
        return redirect('/login')->with(['alert' => 'Username does not exists']);
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

       // Session::put('username',$request->username);


        $message = [
          'required' => "This :attribute field is Required!"
        ];

        $validate = [
            'username' => 'required|unique:users',
            'password' => 'required',
            'cpassword' => 'required|same:password',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|regex:/\d{10}/',


        ];
        $this->validate($request,$validate,$message);
        if($request->has('librarian')){
            $request->merge(['librarian'=>1]);
        }else{
            $request->merge(['librarian'=>0]);
        }

        User::create($request->all());

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
