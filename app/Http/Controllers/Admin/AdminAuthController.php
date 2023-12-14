<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin_users;
use App\Models\Ethnic;

class AdminAuthController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }
    

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
            $user = auth()->guard('admin')->user();
            if($user->is_admin == null){
                $admins = Admin_users::paginate(1);
                $ethnics = Ethnic::paginate(5);
                return view('admin.ethnic',compact('admins','ethnics'));
            }
        }else {
            $admins = Admin_users::paginate(1);
            return back()->with('error','Whoops! invalid email and password.',compact('admins'));
        }
    }

    public function adminLogout(Request $request)
    {
        Auth::logout();
        return view('admin.auth.login');
    }
}