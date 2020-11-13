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
        dd("Here");
    }
    
    public function showAddPanelistPage(){
        dd("Here2");
    }
    
    public function showAddAdminPage(){
        dd("Here3");
    }

}
