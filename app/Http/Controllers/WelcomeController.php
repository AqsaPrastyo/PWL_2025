<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello, Welcome to Laravel';
    }
    // public function greeting(){
    //     return view('blog.hello', ['name' => 'Herry']);
    //     }
    public function greeting(){
        return view('blog.hello')
        ->with('name','Herry')
        ->with('occupation','Astronaut');
        }
}
