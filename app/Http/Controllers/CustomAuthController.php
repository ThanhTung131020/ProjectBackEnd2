<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{
    public $data = [];
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function customLogin(Request $request)
    {

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            return view('dashboard');
        }
        return redirect("login")->withSuccess('Login details are not valid');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        //upload					
        $file = $request->file('fileToUpload');
        $fileName = 'hinhanh_' . $file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath, 'hinhanh_' . $file->getClientOriginalName());

        $data['fileName'] =  $fileName;

        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'fileToUpload' => $data['fileName'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {


        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
    public function listUser()
    {
        $users = User::paginate(2);
        return view('auth.listUser', compact('users'))->with('i', request()->input('page', 1) - 1 * 5);
    }

    public function detail($id)
    {
        $users = DB::table('users')->find($id);
        return view('auth.detail', compact('users'));
    }
}
