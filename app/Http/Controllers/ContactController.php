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
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:255'
        ]);
        Mail::to('admin@test.com')->send(
            new Contact(['nom' => $request->nom, 'email' => $request->email, 'message' => $request->message])
        );
        return view('confirm');
    }
}
