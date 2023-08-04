<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Client;
use App\Models\Reservation;
use App\Models\Driver;
use App\Models\User;

class Auth extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        
        $email=$request->input('email');
        $password=$request->input('password');

        $verifyAccount= User::where('email',$email)->count();
        $User = User::where('email','Admin')->get();
        if($verifyAccount != 0){
            // return view('Dashbord',['Client'=>Client::all('last_name','first_name','Address','Telephone'),'Car'=>Car::all()->where('Stutat',1),
            // 'countClient'=>Client::count(),'CountCar'=>Car::count(),'CarDispo'=>Car::where('Stutat',1)->count(),
            // 'countDriver'=>Driver::count(),"TotalPric"=>Reservation::sum('Pric_Day'),'carBooking'=>Reservation::count('id_car'),'User'=>$User]);
            $DashboardController=new DashboardController();
            return $DashboardController->index();
        }else{
            echo 'error';
        }
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
    public function login(){
        return view('auth.login');
    }

    public function logout(){
        return view('auth.login');
    }
}
