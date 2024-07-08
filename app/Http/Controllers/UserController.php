<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller 
{
	public function index(){
		return view('login', ['title' => 'login']);
	}

	public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->to("/admin");
        } else {
            return back()->with('loginError', 'Login Failed');
        }
    }

	public function logout()
	{
        Auth::logout();

        return redirect("/login");
    }
} 
?>