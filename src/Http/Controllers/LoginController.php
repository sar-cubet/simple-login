<?php
namespace SarCubet\SimpleLogin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SarCubet\SimpleLogin\Models\UsersInfo;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function login()
    {
        return view('simple-login::login');
    }

    public function loginProcess(Request $request)
    {
        $user = UsersInfo::where('username', $request->username)->first();
        
        if ($user && Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return view('simple-login::dashboard');
        }else{
            Session::put('error', 'invalid credentials');
             return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
