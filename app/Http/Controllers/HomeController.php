<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Tour;
use App\Models\User;

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