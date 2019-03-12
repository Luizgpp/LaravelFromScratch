<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to the Store',
            'Go to the Market',
            'Go to the Work',
            'Go to the Home',
        ];

        return view('welcome', [
            'tasks' => $tasks,
            'foo' => 'foobar',
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
