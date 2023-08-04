<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Page/Car/index',['data'=> Car::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Page/Car/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Matricule'=>'required',
            'Marque'=>'required',
            'Model'=>'required',
            'Categore'=>'required',
        ]);

        $Car = new Car();

        $Car->Matricule = $request->input('Matricule');
        $Car->Marque = $request->input('Marque');
        $Car->Model = $request->input('Model');
        $Car->Categore = $request->input('Categore');
        $Car->Color = $request->input('Color');
        $Car->Prix = $request->input('Prix');
        
        
        $imageCar = time().'.'.$request->Photo_Car->extension();
        $request->Photo_Car->move(public_path('assets/Images/'),$imageCar);
        $Car->Photo_Car=$imageCar;

        $Car->save();

        return redirect()->route('Car.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('Page/Car/show',['Car' => Car::findOrFail($id),]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Page/Car/edit',['Car' => Car::findOrFail($id),]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  string $id)
    {
        $request->validate([
            'Matricule'=>'required',
            'Marque'=>'required',
            'Model'=>'required',
            'Categore'=>'required',
        ]);

        $toupdate = Car::findOrFail($id);

        $toupdate->Matricule =strip_tags($request->input('Matricule'));
        $toupdate->Marque = strip_tags($request->input('Marque'));
        $toupdate->Model = strip_tags($request->input('Model'));
        $toupdate->Categore = strip_tags($request->input('Categore'));
        $toupdate->Color = strip_tags($request->input('Color'));
        $toupdate->Prix = strip_tags($request->input('Prix'));
        // $toupdate-> = strip_tags($request->input(''));

        $toupdate->save();

        return redirect()->route('Car.show',$id);
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
            'searchCar'=>'required',
        ]);
        $txtsearch = $request->input('searchCar');
        return view('Page/Car/index',['data'=> Car::Orwhere('Matricule',$txtsearch)->Orwhere('Marque',$txtsearch)->Orwhere('Model',$txtsearch)->Orwhere('Categore',$txtsearch)->get()]);

    }

}
