<?php

namespace App\Http\Controllers\API;

use App\Contact;
use App\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        Subscription::firstOrCreate([
            'email' => $email,
        ]);

        return response()->json(['ok' => 1]);
    }

    public function contact(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $website = $request->input('website');
        $message = $request->input('message');

        Contact::create([
            'name' => $name,
            'email' => $email,
            'website' => $website == '' ? '-' : $website,
            'message' => $message,
        ]);

        return response()->json(['ok' => 1]);
    }

}
