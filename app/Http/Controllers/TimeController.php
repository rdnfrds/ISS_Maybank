<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DateTime;
use DateInterval;
use Carbon\Carbon;

class TimeController extends Controller
{
    
    public function index(Request $request)
    {
        return view('test');
    }

    public function test(request $request){

        $minutes_to_add = 10;
        $trounds= 5;
        $search = $request->input('date');
        $time = strtotime(date($search));

        $time1 = new DateTime($search);
        $time1->add(new DateInterval('PT' . $minutes_to_add . 'M'));
        $stamp = $time1->format('Y-m-d H:i:s');
        
        //dd($stamp);
        $date2 = Http::get( env('Time') . $stamp)->json();

        foreach($date2 as $date2){
        $location2 = Http::get( env('Api_ISS') . $date2)->json();}
        $latitude2 = $location2[0]['latitude'];
        $longitude2 = $location2[0]['longitude'];
        
        //dd($latitude2);
        $place2 = Http::get( env('Location') . $latitude2 .','.$longitude2)->json();
        $zone2 = $place2['timezone_id'];
        echo"<br></br>";
        echo"<h1><center>1 Hour before ".$search."</h1></center>";

        for($j = 1; $j<= $trounds ; $j++){
            $time -= 10*60;
            echo"<br></br>";
            echo"<br></br>";
            echo '<center><h4>Date:'.$date = date('Y-m-d H:i:s',$time);
            echo"<br></br>";
            $location = Http::get( env('Api_ISS') . $time)->json(); 

            echo'Latitude:'.$latitude = $location[0]['latitude'];
            echo'<br></br>';
            echo'Longitude:'.$longitude = $location[0]['longitude'];
            echo'<br></br>';
            $place = Http::get( env('Location') . $latitude .','.$longitude)->json();

            echo'Timezoned:'.$zone = $place['timezone_id'];
            echo"<br></br>";
            echo'country code:'.$country = $place['country_code'];
            echo"<br></br>";
            echo'<button><a href="'.$map = $place['map_url'].'">Maps</a></button></h4></center>';  
                
        }

        echo"<br></br>";
        echo"<h1><center>1 Hour After ".$search."</h1></center>";
        for($i = 1; $i<= $trounds ; $i++){

            echo"<br></br>";
            echo"<br></br>";
            $time1->add(new DateInterval('PT' . $minutes_to_add . 'M'));
            echo'<center><h4>Date:'.$stamp1 = $time1->format('Y-m-d H:i:s');
            echo"<br></br>";
            
            $date1 = Http::get( env('Time') . $stamp1)->json();
            //dd($date2);
            foreach($date1 as $date1){
            $location1 = Http::get( env('Api_ISS') . $date1)->json();}

            echo'Latitude:'.$latitude1 = $location1[0]['latitude'];
            echo'<br></br>';
            echo'Longitude:'.$longitude1 = $location1[0]['longitude'];
            echo'<br></br>';
            $place1 = Http::get( env('Location') . $latitude1 .','.$longitude1)->json();

            echo'Timezoned:'.$zone1 = $place1['timezone_id'];
            echo"<br></br>";
            echo'country code:'.$country1 = $place1['country_code'];
            echo"<br></br>";
            echo'<button><a href="'.$map1 = $place1['map_url'].'">Maps</a></button></h4></center>';
    
        }
        echo"<br></br>";
        echo"<br></br>";

        // Return the search view with the resluts compacted
        return view('test', compact('longitude2','latitude2','longitude','latitude','longitude1','latitude1','zone','zone1','zone2','location2'));
    }


}
