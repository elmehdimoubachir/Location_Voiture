<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Client;
use App\Models\Driver;
use App\Models\Reservation;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Page/Booking/index',['booking'=>Reservation::with('Car','Client')->get(),]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Page/Booking/create',['Client'=>Client::all('id','last_name','first_name'),'Car'=>Car::all('id','Marque','Model'),'Driver'=>Driver::all('id','last_name','first_name'),]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Date_start' =>'required',
            'Date_end'=> 'required',
            'id_client'=>'required',
            'id_car'=>'required',
        ]);

        if($request->input('id_driver')!=null){
            $id_driver=$request->input('id_driver');
        }else {
            $id_driver=0;
        }


        $Reservation = new Reservation();
        $Reservation->id_client = $request->input('id_client');
        $Reservation->id_car = $request->input('id_car');
        $Reservation->Date_start = $request->input('Date_start');
        $Reservation->Date_end = $request->input('Date_end');
        $Reservation->Pric_Day = $request->input('Pric_Day');
        $Reservation->id_driver = $id_driver;

        $Reservation->save();

        // change stutat car
        $Car = Car::findOrFail($request->input('id_car'));
        $Car->Stutat = 0;
        $Car->save();

        return redirect()->route('Reservation.index'); 

        
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
}
