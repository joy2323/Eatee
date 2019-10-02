<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Carbon\Carbon;
use App\Preference;

class PreferenceController extends Controller
{
    
    public function index()
    {
        return view('user.landing');
    }

    public function profile()
    {
        return view('user.profile');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPreference(Request $request)
    {
        // dd($request->all());
        $date = $request->date;
        $duration = $request->duration;
        $budget = $request->budget;
        $allergy = $request->allergies;
        $meat_status = false;
        $fish_status = false;

        if ($request->meat_status == 'yes') {
            $meat_status = 1;
        } else {
            $meat_status = 0;
        }

        if ($request->fish_status == 'yes') {
            $fish_status = 1;
        } else {
            $fish_status = 0;
        }            

        $save = Preference::create(
            [
            "date"     =>   $date,
            "duration"  =>  $duration,
            "budget"    =>  $budget,
            "allergies"  => $allergy,
            "meat_status" => $meat_status,
            "fish_status"  => $fish_status,
            ]
        );
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
