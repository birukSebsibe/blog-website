<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
use Session;
use App\Models\Ethnic;
use App\Models\Admin;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use App\Models\User;
use App\Models\Subscribers;
use App\Models\Post;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $ethnicCount = Ethnic::count();
        $userCount = Subscribers::count();
        $postCount = Post::count();
        return view('admin.home', compact('ethnicCount', 'userCount', 'postCount'));

    }

    public function login()
    {
       
        return view('admin.login');

    }

    public function register()
    {
        return view('admin.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return view('admin.home')
        ->withSuccess('You have successfully registered & logged in!');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $ethnicCount = Ethnic::count();
            $userCount = Subscribers::count();
            $postCount = Post::count();
          
            return view('admin.home', compact('ethnicCount', 'userCount', 'postCount'));
                
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match in our records.',
        ])->onlyInput('email');

    } 

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('admin.home');
        }
        
        return view('admin.login')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    } 

    public function viewEthnic()
    {
        $posts = Ethnic::paginate(7);

        return view('admin.ethnic', compact('posts'));
       
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
    public function destroy()
    {
        
        Session::flush();
        
        Auth::logout();

        return redirect('admin/login');
    }
}
