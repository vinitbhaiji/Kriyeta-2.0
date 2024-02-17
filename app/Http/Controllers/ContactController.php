<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Database\Connectors\ConnectionFactory;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $data = new contact;
        $data->fname = $request['fname'];
        $data->lname = $request['lname'];
        $data->email = $request['email'];
        $data->number = $request['number'];
        $data->message = $request['message'];
        $data->save();
        return redirect()->back();
    }
}
