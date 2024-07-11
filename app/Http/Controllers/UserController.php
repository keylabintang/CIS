<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

<<<<<<< HEAD
class UserController extends Controller 
=======
class UserController extends Controller
>>>>>>> ham
{
	public function index(){
		return view('login', ['title' => 'login']);
	}

	public function authenticate(Request $request)
    {
        $credential = $request->validate([
<<<<<<< HEAD
            'email' => ['required', 'email:dns'],
=======
            'email' => ['required'],
>>>>>>> ham
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
<<<<<<< HEAD
} 
?>
=======
}
?>
>>>>>>> ham
