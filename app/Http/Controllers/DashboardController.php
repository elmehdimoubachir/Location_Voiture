<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Client;
use App\Models\Reservation;
use App\Models\Driver;
use App\Models\Setting;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashbord',['Client'=>Client::all('id','last_name','first_name','Address','Telephone'),'Car'=>Car::all()->where('Stutat',1),
        'countClient'=>Client::count(),'CountCar'=>Car::count(),'CarDispo'=>Car::where('Stutat',1)->count(),
    'countDriver'=>Driver::count(),"TotalPric"=>Reservation::sum('Pric_Day'),'carBooking'=>Reservation::count('id_car'),'appinfo'=>Setting::findOrFail(1),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request){
        $request->validate([
            'searchClient'=>'required',
        ]);

        $txtsearch = $request->input('searchDashboard');
        $dataClient = Client::Orwhere('last_name',$searchclient )->Orwhere('first_name',$searchclient)->Orwhere('CIN',$searchclient)->get();
        $dataCar = Car::Orwhere('Matricule',$txtsearch)->Orwhere('Marque',$txtsearch)->Orwhere('Model',$txtsearch)->Orwhere('Categore',$txtsearch)->get();

        if($dataClient!==null){
            return view('Page/Client/index',['data'=> $$dataClient]);
        }
        
        if($dataCar!==null){
            return view('Page/Car/index',['data'=> $dataCar]);
        }
    }

}
