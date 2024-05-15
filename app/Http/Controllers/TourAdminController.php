<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class TourAdminController extends Controller
{
    public function addTour()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype === 'Tour Owner')
            {
                return View ('touradmin.addTour');
            }
        }
    }

    public function allTours()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype === 'Tour Owner')
            {
                return View ('touradmin.allTours');
            }
        }
    }

    public function adminAccSetting()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype === 'Tour Owner')
            {
                return View ('touradmin.adminAccSetting');
            }
        }
    }
}
