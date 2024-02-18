<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function submit(Request $request)
    {
        $data = new Signup;
        $data->fname = $request['fname'];
        $data->uname = $request['uname'];
        $data->email = $request['email'];
        $data->number = $request['number'];
        $data->pass = $request['pass'];
        $data->cpass = $request['cpass'];
        $data->save();
        return redirect('test');
    }
}
