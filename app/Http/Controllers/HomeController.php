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

    public function home()
    {
        $data = tour::all();

        return view('dashboard',compact('data'));   
        
    }
    public function login_home()
    {
        $data = tour::all();

        return view('dashboard',compact('data'));   
    }

    public function search(Request $request)
    {
        // Validate the input
        $request->validate([
            'DestinationFrom' => 'required|string',
            'DestinationTo' => 'required|string',
            'date' => 'required|string',
        ]);

        // Retrieve data from the database
        $tours = Tour::where('DestinationFrom', $request->DestinationFrom)
                  ->where('DestinationTo', $request->DestinationTo)
                  ->where('date', '=', date('Y-m-d', strtotime($request->date)))
                  ->get();

        // Return the results to the view
        return view('dashboard', compact('tours'));
    }
    
  
}
