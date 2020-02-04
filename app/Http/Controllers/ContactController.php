<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('contact', ['user' => $user]);
    }

    public function store(Request $request)
    {
        Mail::to('admin@test.com')->send(new Contact($request->message));
        return view('confirm');
    }
}
