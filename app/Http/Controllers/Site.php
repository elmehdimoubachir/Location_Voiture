<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Offers;

class Site extends Controller
{
    public function index(){
        $Offers = Offers::SELECT('offers.*','cars.Matricule','cars.Marque','cars.Model','cars.Categore','cars.Photo_Car')
        ->join('cars','cars.id','offers.id_car')
        ->get();
        return view('Site/index',['data'=> Setting::findOrFail(1),'Offers'=>$Offers]);
    }

    public function offers(){
        $Offers = Offers::SELECT('offers.*','cars.Matricule','cars.Marque','cars.Model','cars.Categore','cars.Photo_Car')
        ->join('cars','cars.id','offers.id_car')
        ->get();
        return view('Site/Offers',['data'=> Setting::findOrFail(1),'Offers'=>$Offers]);
    }
}
