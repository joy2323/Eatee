<?php

namespace App\Http\Controllers;

use App\Mail\PreferenceMail;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Carbon\Carbon;
use App\Preference;
use Illuminate\Support\Facades\Mail;

class PreferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'duration' => 'required|string',
            'budget'   => 'required|numeric',
            'allergies' => 'required|string',
            'meat_status' => 'required|integer|min:0|max:1',
            'fish_status' => 'required|integer|min:0|max:1',
        ]);
        $user = Auth::user();
        //dd($request->all());
        $date = $request->date;
        $duration = $request->duration;
        $budget = $request->budget;
        $allergy = $request->allergies;

        $preference = Preference::create([
            "date"         => $date,
            "duration"     => $duration,
            "budget"       => $budget,
            "allergies"    => $allergy,
            "meat_status"  => $request->meat_status,
            "fish_status"  => $request->fish_status,
            'user_id'      => $user->id
            ]);
        
        Mail::to($user->email)
            ->queue(new PreferenceMail($preference));

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
