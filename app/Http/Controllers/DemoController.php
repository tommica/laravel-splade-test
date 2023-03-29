<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function formTest()
    {
        $data = [
            'name' => request()->input('name'),
            'email' => request()->input('email'),
        ];

        return view('formTest', $data);
    }
}
