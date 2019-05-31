<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(Request $request)
    {
        echo 'I`m Ok';
                $this->validate($request, [
                    'pid' => 'required',
                    'uid' => 'int',
                ]);
        return $request->all();
//        return view('home');
    }

    public function help()
    {
        return view('help');
    }

    public function about()
    {
        return view('about');
    }
}
