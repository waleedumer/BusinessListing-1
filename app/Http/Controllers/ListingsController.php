<?php

namespace App\Http\Controllers;

use App\Amenity;
use App\Category;
use App\ClaimedListing;
use App\Country;
use App\Listing;
use App\User;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $page_data=['page_name'=>'listings','page_title'=>'Directories'];
        $users=User::all();
        $listings=Listing::all();
        $claimed_listings=ClaimedListing::all();
        return view('admin.index',compact(['page_data','users','listings','claimed_listings']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $page_data=['page_name'=>'listing_create_wiz','page_title'=>'Add New Listing'];
        $countries=Country::all();
        $categories=Category::all();
        $amenities=Amenity::all();
        return view('admin.index',compact(['page_data','countries','categories','amenities']));
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
    public function make_active(Request $request, $id){

    }
    public function make_pending(Request $request, $id){

    }
    public function make_featured(Request $request, $id){

    }
    public function make_none_featured(Request $request){

    }
    public function filter_listing_table(Request $request){

    }
    public function get_city_list_by_country_id(Request $request){

    }
}
