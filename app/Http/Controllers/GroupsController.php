<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Faculty;

class GroupsController extends Controller
{
    protected $view = "pages.group";

    
    public function index(){
    	$groups = Group::get();

    	// dd($faculty);
    	
    	return $this->view("index",compact(["groups"]));
    }

    public function new(){
    	$faculties = Faculty::get();
    	
    	return $this->view("new",compact(["faculties"]));
    }

    public function add(Request $request){

    	$rules = [
            'name' => 'required',
            'faculty' => 'required'
        ];
        $this->validate($request,$rules);

    	$name = $request->name;
    	$faculty = $request->faculty;

    	Group::insert([
    		'name' => $name,
    		'faculty_id' => $faculty
    	]);

    	return redirect("/group")->with("success","New Group has been added");
    	
    }

    public function delete(Request $request){
    	$id = $request->id;

    	Group::find($id)->delete();

    	echo "success";
    }


    public function edit($id){
    	$group = Group::find($id);
    	$faculties = Faculty::get();

    	return $this->view("edit",compact(["group","faculties"]));
    }

    public function edit_save(Request $request,$id){

    	$rules = [
            'name' => 'required',
    		'faculty' => 'required'
        ];
        $this->validate($request,$rules);

    	$name = $request->name;
    	$faculty = $request->faculty;
    		

    	Group::where("id",$id)->update([
    		'name' => $name,
    		'faculty_id' => $faculty
    	]);

    	return redirect("/group")->with("success","Group has been edited");
    	
    }
}
