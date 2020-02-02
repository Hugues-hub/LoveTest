<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function create()
      {
          return view('contact');
      }

      public function store(ContactRequest $request)
      {
        Mail::to('admin@test.com')->send(new Contact($request));
        return view('confirm');
      }



}


// $this->validate($request,[
//     'nom' => 'required|',
//     'email' => 'required|email',
//     'message' => 'bail|required|max:250'
// ]);
