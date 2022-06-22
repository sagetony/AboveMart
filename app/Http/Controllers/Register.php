<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->ref)) {
            $id = $request->ref;
            return view("user.register")->with('id', $id);
        } else {
            $id = '';
            return view("auth.register")->with('id', $id);
        }
    }
}
