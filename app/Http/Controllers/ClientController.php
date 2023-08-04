<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('Page/Client/index',['data'=> Client::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Page/Client/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'last_name'=>'required',
            'first_name'=>'required',
            'CIN'=>'required',
            'dateBrithy'=>'required',
            'Address'=>'required',
            'Telephone'=>'required',
            'pirme'=>'required',

        ]);

        $Client = new Client();

        $Client->last_name = $request->input('last_name');
        $Client->first_name = $request->input('first_name');
        $Client->CIN = $request->input('CIN');
        $Client->dateBrithy = $request->input('dateBrithy');
        $Client->Address = $request->input('Address');
        $Client->Telephone = $request->input('Telephone');
        $Client->pirme = $request->input('pirme');

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('assets/Images/'),$imageName);
        
        $Client->photoCin=$imageName;
        $Client->save();

        return redirect()->route('Client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        return view('Page/Client/show',['Client' => Client::findOrFail($id),]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Page/Client/edit',['Client' => Client::findOrFail($id),]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'last_name'=>'required',
            'first_name'=>'required',
            'CIN'=>'required',
            'dateBrithy'=>'required',
            'Address'=>'required',
            'Telephone'=>'required',
            'pirme'=>'required',
        ]);

        $UpdateTo = Client::findOrFail($id);

        $UpdateTo->last_name = $request->input('last_name');
        $UpdateTo->first_name = $request->input('first_name');
        $UpdateTo->CIN = $request->input('CIN');
        $UpdateTo->dateBrithy = $request->input('dateBrithy');
        $UpdateTo->Address = $request->input('Address');
        $UpdateTo->Telephone = $request->input('Telephone');
        $UpdateTo->pirme = $request->input('pirme');

        $UpdateTo->save();

        return redirect()->route('Client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $toDelete = Client::findOrFail($id);
        $toDelete->delete();
        return redirect()->route('Client.index');
    }

    public function search(Request $request){

        $request->validate([
            'searchClient'=>'required',
        ]);

        $searchclient = $request->input('searchClient');

        return view('Page/Client/index',['data'=> Client::Orwhere('last_name',$searchclient )->Orwhere('first_name',$searchclient)->Orwhere('CIN',$searchclient)->get()]);
    }
}
