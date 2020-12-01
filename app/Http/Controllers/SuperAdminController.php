<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Webinar;
use App\User;
use App\Sponsors;

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

        return view('dashboard.create.panelists');
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
        #dd($request);

        if(isset($request->booth)){
            $sponsor = new Sponsors();

            $sponsor->sponsor_name = $request->name;
            $sponsor->sponsor_contact_email = $request->email;

            $filenameWithExt = $request->file('booth')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('booth')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('booth')->storeAs('/canvas/' . $request->name ,$fileNameToStore);

            $sponsor->booth_path = '/canvas/' . $request->name;

            #$sponsor->save();

            $zip = new \ZipArchive;
            $res = $zip->open($path, \ZipArchive::CREATE || \ZIPARCHIVE::OVERWRITE);
            if($res === TRUE){

                $zip->extractTo('/canvas/' . $request->name);
                $zip->close();
                dd("Done");
            }

        }

    }

    public function addWebinar(Request $request){
        if($this->_addWebinar($request)){
            return redirect()->back()->with('success', 'Uspješno ste dodali webinar.');
        }
        else{
            return redirect()->back()->with('error', 'Webinar nije spašen. Molimo pokušajte kasnije.');
        }
    }

    private function _addWebinar(Request $request){
        #dd($request->date);

        $webinar = new Webinar();
        $webinar->webinar_name = $request->name;
        $webinar->webinar_link = $request->link;

        $webinar->webinar_date = $request->date;
        $webinar->webinar_time = $request->time;
        $webinar->webinar_duration = $request->duration;

        if($webinar->save()){
            return true;
        }
        else{
            return false;
        }

    }

    public function addPanelist(Request $request){
        $this->_addPanelist($request);
    }

    private function _addPanelist(Request $request){
        dd($request);
    }

}
