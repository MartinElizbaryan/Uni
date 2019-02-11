<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Faculty;
use App\Group;

class DashboardController extends Controller
{
	protected $view = "pages.dashboard";

    public function index(){
    	$students = Student::get();

    	// dd($students[0]->group->faculty);
    	
    	return $this->view("index",compact(["students"]));
    }

    public function delete(Request $request){
    	
    	$id = $request->id;

    	Student::find($id)->delete();

    	echo "success";
    }

    public function new(){
    	$faculties = Faculty::get();
    	
    	return $this->view("new",compact(["faculties"]));
    }

    public function add(Request $request){

    	$rules = [
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'group' => 'required',
        ];
        $this->validate($request,$rules);

    	$name = $request->name;
    	$lastname = $request->lastname;
    	$phone = $request->phone;
    	$group_id = $request->group;

    	Student::insert([
    		'name' => $name,
    		'lastname' => $lastname,
    		'phone' => $phone,
    		'group_id' => $group_id
    	]);

    	return redirect("/")->with("success","New student has been added");
    	
    }


    public function getGroups(Request $request){
    	$id = $request->id;

    	$group = Group::where("faculty_id",$id)->get();

    	return response($group);
    }




    public function edit($id){
    	$student = Student::find($id);
    	$faculties = Faculty::get();

    	return $this->view("edit",compact(["student","faculties"]));
    }

    public function edit_save(Request $request,$id){

    	$rules = [
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
    		'group' => 'required'
        ];
        $this->validate($request,$rules);

    	$name = $request->name;
    	$lastname = $request->lastname;
    	$phone = $request->phone;
    	$group_id = $request->group;
    		

    	Student::where("id",$id)->update([
    		'name' => $name,
    		'lastname' => $lastname,
    		'phone' => $phone,
    		'group_id' => $group_id
    	]);

    	return redirect("/")->with("success","Student has been edited");
    	
    }

    public function getResultOfSearch(Request $request){
        
        $search = $request->search;
        $where = $request->where;
        $students = Student::where($where,"like","%".$search."%")->with("group.faculty")->get();

        return response($students);

    }
}
