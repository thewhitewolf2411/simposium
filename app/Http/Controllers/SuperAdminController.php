<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SuperAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function showCreateWebinarPage(){
        return view('dashboard.create.webinars');
    }
    
    public function showAddPanelistPage(){
        dd("Here2");
    }
    
    public function showAddAdminPage(){
        dd("Here3");
    }

    public function showAddSponsorPage(){
        return view('dashboard.create.sponsors');
    }

    //add Post Route

    public function addSponsor(Request $request){
        $this->_addSponsor($request);
    }

    private function _addSponsor(Request $request){
        dd($request);
    }

    public function addWebinar(Request $request){
        $this->_addWebinar($request);
    }

    private function _addWebinar(Request $request){
        dd($request);
    }

}
