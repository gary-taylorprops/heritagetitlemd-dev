<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

use App\HTLocation;
use App\User;

class HTLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locations = HTLocation::orderBy('name')->get();
        $user = Auth::user();
        return view('ht-location.index')->with(['locations'=>$locations,'user'=>$user]);
    }

    public function public_index()
    {
        $locations = HTLocation::orderBy('name')->get();
        return view('locations')->with('locations',$locations);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('ht-location.create')->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request,[
            'name' => 'required',
            'address1'  => 'required',
            'city'  => 'required',
            'state'  => 'required',
            'zip'  => 'required',
            'url'  => 'required'
        ]); */

        // Create Location
        $location = new HTLocation;
        $location->name = $request->input('name');
        $location->address1 = $request->input('address1');
        $location->address2 = $request->input('address2');
        $location->city = $request->input('city');
        $location->state = $request->input('state');
        $location->zip = $request->input('zip');
        $location->map_url = $request->input('map_url');
        $user = Auth::user();
        $location->save();

        return redirect('/dashboard/ht-locations')->with(['success'=>'Location Created','user'=>$user]);
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
        $location = HTLocation::find($id);
        $user = Auth::user();
        return view('ht-location.edit')->with(['location'=>$location,'user'=>$user]);
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
        /*$this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);*/

        // Update Post
        $location = HTLocation::find($id);
        $location->name = $request->input('name');
        $location->address1 = $request->input('address1');
        $location->address2 = $request->input('address2');
        $location->city = $request->input('city');
        $location->state = $request->input('state');
        $location->zip = $request->input('zip');
        $location->map_url = $request->input('map_url');
        $user = Auth::user();
        $location->save();

        return redirect('/dashboard/ht-locations')->with(['success'=>'Post Updated','user'=>$user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = HTLocation::find($id);
        $user = Auth::user();
        $location->delete();
        return redirect('/dashboard/ht-locations')->with(['success'=>'Location Deleted','user'=>$user]);
    }
}
