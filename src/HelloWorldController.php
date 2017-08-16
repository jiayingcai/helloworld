<?php

namespace JiaYing\HelloWorld;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class HelloWorldController extends Controller
{
    //
    public function index() 
    {
        $message = 'Hello World';
        return view('HelloWorld::welcome', compact('message'));
    }
}
