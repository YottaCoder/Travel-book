<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype === 'Traveler')
            {
                return View ('dashboard');
            }
            else
            {
                return View ('touradmin.index');
            }
        }
    }
}
