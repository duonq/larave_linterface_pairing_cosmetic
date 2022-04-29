<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // User::create([
        //     'name' => 'Admin Manager',
        //     'email' => 'Admin@mail.com',
        //     'password' => bcrypt(1235678)
        // ]);
        return view('siteAdmin.dashboard');
        // echo '<h1>Admin page</h1>';
    }

    public function login()
    {
        return view('siteAdmin.login');
    }
    public function post_login(Request $req)
    {
        $req->validate(
            [
                'email' => 'required|exists:users',
                'password' => 'required'

            ],
            [
                'email.required' => 'email không để rỗng',
                'email.exists' => 'email không hợp lễ',
                'password.required' => 'password không để rỗng',

            ]
        );
        $data = $req->only('email', 'password');
        $check_login = auth::attempt($data);
        // dd($check_login);
        if ($check_login) {
            return redirect()->route('admin.dashboard')->with('yes', 'Đăng nhập thành công');
        } else return redirect()->back()->with('no', 'Đăng nhập thành công');
    }
}
