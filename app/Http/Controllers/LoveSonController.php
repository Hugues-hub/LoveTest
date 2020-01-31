<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoveSonController extends Controller
{
    public function photo()
    {
      if (Auth::user()->start_up == 'lovelace') {
        return view('photoLove');
      }
        return view('photoJon');
    }
}
