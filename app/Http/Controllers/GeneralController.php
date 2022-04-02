<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function contact(Request $request)
    {
        $data = $request->all();
        $contact = Contact::insert(array(
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
        ));
        return response()->json(['status' => 200, 'message' => "Contact saved successfully"], 200);
    }
}
