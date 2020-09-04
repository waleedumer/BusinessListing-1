<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManageProfilesController extends Controller
{
    //
    public function index($id){
        $page_data=['page_name'=>'manage_profile','page_title'=>'Manage Profile'];
        return view('admin.index',compact('page_data'));
    }
}
