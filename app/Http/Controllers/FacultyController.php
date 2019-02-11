<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;

class FacultyController extends Controller
{
    protected $view = "pages.faculty";

    
    public function index(){
    	$faculties = Faculty::get();

    	// dd($faculty);
    	
    	return $this->view("index",compact(["faculties"]));
    }


    public function new(){
    	
    	return $this->view("new",compact([""]));
    }

    public function edit($id){
    	
    	$faculty = Faculty::find($id);

    	return $this->view("edit",compact(["faculty"]));
    }

    public function add(Request $request){

    	$rules = [
            'name' => 'required',
        ];
        $this->validate($request,$rules);

    	$name = $request->name;

    	Faculty::insert([
    		'name' => $name
    	]);

    	return redirect("/faculty")->with("success","New Faculty has been added");
    	
    }


    public function delete(Request $request){
    	
    	$id = $request->id;

    	Faculty::find($id)->delete();

    	echo "success";
    }

    public function edit_save(Request $request,$id){

    	$rules = [
            'name' => 'required',
        ];
        $this->validate($request,$rules);

    	$name = $request->name;

    	Faculty::where("id",$id)->update([
    		'name' => $name
    	]);

    	return redirect("/faculty")->with("success","Faculty has been edited");
    	
    }


}
