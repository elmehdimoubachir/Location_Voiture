<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Page/Driver/index',['data'=> Driver::all()]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Page/Driver/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'last_name'=>'required',
            'first_name'=>'required',
            'Address'=>'required',
            'CIN'=>'required',
        ]);


        $Driver = new Driver();
        $Driver->last_name = $request->input('last_name');
        $Driver->first_name = $request->input('first_name');
        $Driver->CIN = $request->input('CIN');
        $Driver->dateBrithy = $request->input('dateBrithy');
        $Driver->Address = $request->input('Address');
        $Driver->Telephone = $request->input('Telephone');
        $Driver->pirme = $request->input('pirme');

        $Driver->save();
        return redirect()->route('Driver.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('Page/Driver/show',['Driver' => Driver::findOrFail($id),]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Page/Driver/edit',['Driver' => Driver::findOrFail($id),]);

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
