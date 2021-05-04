<?php

namespace App\Http\Controllers;

use App\CanvasData;
use App\CanvasEvents;
use App\Services\CreatingCanvasAlhorithm;
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

    public function showAddSponsorPage(){
        return view('dashboard.create.sponsors');
    }

    public function showAddExhibition(){
        return view('dashboard.create.exhibition');
    }

    public function showAddSummary(){
        return view('');
    }

    //add Post Route

    public function addSponsor(Request $request){
        $createdCanvas = $this->_addSponsor($request);

        if($createdCanvas){
            return redirect('/simpozij/editsponsor/' . $createdCanvas->id);
        }
    }

    private function _addSponsor(Request $request){
        #dd($request->all());

        if($request->input_image){
            $filenameWithExt = $request->file('input_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('input_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('input_image')->storeAs('public/input_image',$fileNameToStore);
        }

        $canvas = CanvasData::create([

            'canvas_name'=>$request->name,
            'image_path'=>$fileNameToStore,
            'booth_type'=>$request->booth_type

        ]);

        return $canvas;

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

    public function editSponsorPage($id){
        $canvas = CanvasData::find($id);

        return view('dashboard.create.editwebinar', ['canvas'=>$canvas]);
    }

    public function editSponsor(Request $request){

        #dd($request->all());

        $canvas = CanvasData::find($request->canvas_id);
        $data = $request->all();

        $response = new CreatingCanvasAlhorithm($canvas, $data);
        $responseData = $response->createCanvasEvents();

        return redirect($responseData);
    }

    public function addExhibition(Request $request){
        if($this->_addExhibition($request)){
            return redirect()->with('success', '');
        }
    }

    private function _addExhibition(Request $request){
        $requestData = $request->all();
    }

    public function getExhibitionData(Request $request){
        dd($request->all());
    }

}
