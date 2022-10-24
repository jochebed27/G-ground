<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'email' => 'required|unique:genders',
            'address' => 'required',
            'password' => 'required|confirmed'
        ]);
        //  dd($form_data); 
        $gender = new Gender();
        $gender -> firstname = $request -> firstname;
        $gender -> lastname = $request -> lastname;
        $gender -> gender = $request -> gender;
        $gender -> age = $request -> age;  
        $gender -> email = $request -> email;  
        $gender -> address = $request -> address;
        $gender -> password=Hash::make($request->password);
        $gender -> save();

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $gender=Gender::all();

        return view('userinfo',compact('gender'));

    }
    public function info($id){
        $gender=Gender::find($id);

        return view('info',compact('gender'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gender = Gender::find($id);

        return view('forms.edit', ['gender'=>$gender]);
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
        $gender = Gender::find($id);
        $gender->update([
           
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'gender' => $request->gender,
            'age' => $request->age,
            'email' => $request->email,
            'address' => $request->address,
            'password' =>$request->password,

        ]);

        return redirect('/userinfo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gender = Gender::destroy($id);

        return back();
    }

    public function login(){
        return view('forms.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $genders=Gender::find($request->email);
 
            return view('/page',compact('genders'));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

        //return redirect('/home');
    }

    public function page(){
        // $genders=Gender::find($id);
        
        return view('page');
    }

    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

   

    public function courses(){
        return view('course');
    }

    public function blog(){
        return view('forms.blog');
    }

    

}
