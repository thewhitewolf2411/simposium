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
use App\Summary;
use App\ExcibitionElement;
use Exception;

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
        return view('dashboard.create.summary');
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
        if($this->_addExhibition($request->all())){
            return redirect()->back()->with('success', 'Exhibition succesfully added');
        }
        else{
            return redirect()->back()->with('fail', 'Something went wrong. Please try again.');
        }
    }

    private function _addExhibition(array $data){
        $filenameWithExt = $data['exhibition_image']->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $data['exhibition_image']->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $data['exhibition_image']->storeAs('public/exhibition_data',$fileNameToStore);

        $summary_data = [
            'excibition_name'=>$data['exhibition_name'],
            'excibition_image'=>$fileNameToStore
        ];

        try{ExcibitionElement::create($summary_data);return true;}
        catch(Exception $e){
            dd($e->getMessage());
            return false;
        }
    }

    public function addSummary(Request $request){

        if($this->_addSummary($request->all())){
            return redirect()->back()->with('success', 'Summary succesfully added.');
        }
        else{
            return redirect()->back()->with('fail', 'Something went wrong. Please try again.');
        }

    }

    private function _addSummary(array $data){

        $filenameWithExt = $data['summary_file']->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $data['summary_file']->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $data['summary_file']->storeAs('public/summary_data',$fileNameToStore);

        $summary_data = [
            'summary_name'=>$data['summary_name'],
            'summary_file'=>$fileNameToStore
        ];

        try{Summary::create($summary_data);return true;}
        catch(Exception $e){
            return false;
        }

    }

}
