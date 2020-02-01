<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Photo;


class LoveSonController extends Controller
{
    public function photo()
    {
      if (Auth::user()->start_up == 'lovelace') {
        $photos = Photo::where('start_up', 'Lovelace')->paginate(5);
        return view('photoLove', ['photos' => $photos]);
        }
        $photos = Photo::where('start_up', 'Johnson')->paginate(5);
        return view('photoJon', ['photos' => $photos]);
      }
}
