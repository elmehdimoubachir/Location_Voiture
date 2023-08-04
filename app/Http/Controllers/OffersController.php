<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offers;
use App\Models\Car;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Offers = Offers::SELECT('offers.*','cars.Matricule','cars.Marque','cars.Model','cars.Categore','cars.Photo_Car')
        ->join('cars','cars.id','offers.id_car')
        ->get();
        return view('Page/Offers/index',['Offers'=>$Offers,]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Page/Offers/create',['data'=>Car::where('Stutat',1)->get(),]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_Car'=>'required',
            'Days'=>'required',
            'Pric'=>'required',
            'Decription'=>'required',
        ]);

        $Offer = new Offers();
        $Offer->id_Car = $request->input('id_Car');
        $Offer->id_User = 1;
        $Offer->Days = $request->input('Days');
        $Offer->Pric = $request->input('Pric');
        $Offer->Date_From =$request->input("Date_From");
        $Offer->Date_To=$request->input("Date_To");
        $Offer->Discription = $request->input('Decription');


        $Offer->save();
        return redirect()->route('Offer.index');
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
