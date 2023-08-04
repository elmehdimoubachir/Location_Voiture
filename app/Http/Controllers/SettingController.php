<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Page/Settings/index',['data'=> Setting::findOrFail(1)]);

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
        $request->validate([
            'Name_App'=>'required',
            'Addrsse'=>'required',
            'Telephone'=>'required',
            'Email'=>'required',
        ]);

        $toupdate = Setting::findOrFail($id);

        $toupdate->Name_App =strip_tags($request->input('Name_App'));
        $toupdate->Addrsse = strip_tags($request->input('Addrsse'));
        $toupdate->Telephone = strip_tags($request->input('Telephone'));
        $toupdate->Email = strip_tags($request->input('Email'));
        $toupdate->Site_Web = strip_tags($request->input('Site_Web'));
        $toupdate->N_Banque = strip_tags($request->input('N_Banque'));

        $imageName = time().'.'.$request->LogoApp->extension();
        $request->LogoApp->move(public_path('assets/Images/'),$imageName);
        $toupdate->photo_App=$imageName;

        $imageMinLogo = time().'.'.$request->MinLogo->extension();
        $request->MinLogo->move(public_path('assets/Images/'),$imageMinLogo);
        $toupdate->Icon_App=$imageMinLogo;

        $toupdate->save();

        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function layout(){
        return view('Layout/Layout',['Layout'=> Setting::findOrFail(1)]);
    }
}
