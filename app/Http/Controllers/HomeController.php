<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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
        $startUp = Auth::user()->start_up;
        $users = User::where('start_up', $startUp)->get();
        $name = Auth::user()->name;
        return view(
            'home',
            [
            'name' => $name,
            'users' => $users,
            'startUp' => $startUp
            ]
        );
    }
}
