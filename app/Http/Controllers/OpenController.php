<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenController extends Controller
{
    public function index(){
        $tasks=[
            'Go to Store',
            'Go to work',
            'Go to market'
        ];
        return view('/main', [
        'tasks'=> $tasks,
        'foo' => 'Awesommmee'
        ]);
    }

    public function about(){
        return view ('/about');
    }

    public function contact(){
        return view ('/contact');
    }
}
