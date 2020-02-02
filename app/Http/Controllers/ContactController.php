<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
  public function create()
      {
          return view('contact');
      }

      public function store(ContactRequest $request)
      {
        Mail::to('7d912e6196-31d225@inbox.mailtrap.io')
        ->send(new Contact($request->except('_token')));
          return view('confirm');
      }

}
