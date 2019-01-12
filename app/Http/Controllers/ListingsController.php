<?php

namespace App\Http\Controllers;

use App\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::orderBy('id', 'desc')->get();
        return view('listings', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createlisting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        // Create new listing
        $listing = new Listing;
        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->address = $request->input('address');
        $listing->website = $request->input('website');
        $listing->phone = $request->input('phone');
        $listing->bio = $request->input('bio');
        $listing->user_id = auth()->user()->id;

        $listing->save();

        return redirect('/dashboard')->with('success', 'Listing Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return view('viewlisting', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::findOrFail($id);
        return view('editlisting', compact('listing'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        
        // Update Listing
        $listing = Listing::findOrFail($id);
        $listing->name = $request->input('name');
        $listing->email = $request->input('email');
        $listing->address = $request->input('address');
        $listing->website = $request->input('website');
        $listing->phone = $request->input('phone');
        $listing->bio = $request->input('bio');
        $listing->user_id = auth()->user()->id;

        $listing->save();

        return redirect('/dashboard')->with('success', 'Listing Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Listing::findOrFail($id)->delete()) {
            return redirect('dashboard')->with('success', 'Listing Deleted');
        }
        return redirect('dashboard')->with('danger', 'Can not delete, please try again later.');
    }
}
