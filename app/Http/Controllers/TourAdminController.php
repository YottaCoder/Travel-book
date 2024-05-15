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
        $tour= new Tour();

        
        //Save Image
        $image = $request->file('TourPhoto'); 
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $image->move('storage/tourimage', $imagename); 
        $tour->TourPhoto=$imagename;
        
        // $image = $request->TourPhoto;
        // $ext = $image->getClientOriginalExtension();
        // $imagename = time().'.'.$ext;
        
        // $image = $request->file('TourPhoto');

        //Save Check Box
        // $facility = $request->input('facility');
        // $tour->facility = implode(' , ',$facility);
        $tour->facility = json_encode($request->facility);


        $tour->Organization=$request->Organization;
        $tour->TourName=$request->TourName;
        $tour->DestinationFrom=$request->DestinationFrom;
        $tour->DestinationTo=$request->DestinationTo;
        $tour->date=$request->date;
        $tour->Prize=$request->Prize;
        $tour->TourDay=$request->TourDay;
        $tour->TourNights=$request->TourNights;
        

        $tour->save();

        return redirect()->back()->with('message','Successfully Added Tour Information');
    }

    public function showtour()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype === 'Tour Owner')
            {
                $data = tour::all();

                return view('touradmin.allTours',compact('data'));
            }
            else
            {
                return redirect()->back();
            }
        }
        
    }

    public function deletetour($id)
    {
        $data = tour::find($id);

        $data->delete();

        return redirect()->back();
    }

   
}

?>