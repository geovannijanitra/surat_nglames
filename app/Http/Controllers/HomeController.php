<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home', );
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([

            'password' => Hash::make($request->password),

        ]);
        return redirect('home')->with('warning', 'Password berhasil diperbarui');
    }
}
