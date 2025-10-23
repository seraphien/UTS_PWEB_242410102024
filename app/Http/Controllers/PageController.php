<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan(Request $request)
    {
        $listData = [
            ['nama' => 'Cindy', 'peran' => 'Artist'],
            ['nama' => 'Evie', 'peran' => 'Programmer'],
            ['nama' => 'Yoshino', 'peran' => 'Designer'],
            ['nama' => 'Faust', 'peran' => 'Researcher'],
        ];

        $username = $request->query('username');
        return view('pengelolaan', compact('listData', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }
}
