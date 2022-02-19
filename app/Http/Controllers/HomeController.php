<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use Carbon\Carbon;

class HomeController extends Controller
{
    
    public function index(Request $request)
    {
        return view('home');
    }

    public function search(Request $request)
    {
        // $search = $request->input('timestamps');
        $minutes_to_add = 10;
        
        $search = $request->input('date');

        $time1 = new DateTime($search);
        $time1->add(new DateInterval('PT' . $minutes_to_add . 'M'));
        $stamp = $time1->format('Y-m-d H:i:s');
        
        //dd($stamp);
        $date = Http::get( env('Time') . $search)->json();

        $date1 = Http::get( env('Time') . $stamp)->json();
        //dd($date);
        foreach($date as $date){
        $location = Http::get( env('Api_ISS') . $date)->json();}

        foreach($date1 as $date1){
        $location1 = Http::get( env('Api_ISS') . $date1)->json();}
        
        //dd($location1);
        $latitude = $location[0]['latitude'];
        $longitude = $location[0]['longitude'];
        
        //dd($longitude);
        $place = Http::get( env('Location') . $latitude .','.$longitude);
        $array = json_decode($place,TRUE);

        // Return the search view with the resluts compacted
        return view('home', compact('location','location1','stamp'),[ 'place' => $place ]);
    }

}
