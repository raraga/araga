<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        Contact::create($request->validated());

        return to_route('index')->with('success', 'Thanks for the message!');
    }
}
