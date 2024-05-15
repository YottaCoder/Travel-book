<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Tour;
use App\Models\User;
 

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

    public function upload_tour(Request $request)
    {
        $tour= new tour;

        $image = $request->file('TourPhoto'); 
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('tourimage', $imagename); 
        
        // $image = $request->TourPhoto;
        // $ext = $image->getClientOriginalExtension();
        // $imagename = time().'.'.$ext;
        
        // $image = $request->file('TourPhoto');

        $tour->TourPhoto=$imagename;
        $tour->Organization=$request->Organization;
        $tour->TourName=$request->TourName;
        $tour->DestinationFrom=$request->DestinationFrom;
        $tour->DestinationTo=$request->DestinationTo;
        $tour->date=$request->date;
        $tour->Prize=$request->Prize;
        $tour->TourDay=$request->TourDay;
        $tour->TourNights=$request->TourNights;
        $tour->Meals=$request->Meals;
        $tour->Hotel=$request->Hotel;
        $tour->Transfer=$request->Transfer;

        $tour->save();

        return redirect()->back();
    }

   
}

?>