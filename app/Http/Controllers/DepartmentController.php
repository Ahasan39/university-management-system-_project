<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function create(){
        return view('department.create');
    }

    public function store(Request $req){
        $obj = new Department ;
        $obj->name = $req->name;
        $obj->sort_name = $req->shortName;
        $obj->established_at = $req->estAt;
        //
        if($obj->save()){
            echo 'Successfully Inserted';
        }
    }
    public function all(){
        //Select * from departments
        $departments = Department::all(); // Changed variable name to lowercase 'departments'
        return view('department.all', compact('departments')); // Corrected variable name in compact function
    }
    public function edit($id){
    $department = Department::find($id); // Changed variable name to singular 'department'
    return view('department.edit', compact('department')); // Corrected variable name in compact function
}
    public function update(Request $req,$id){
        $obj = Department::find($id);
        $obj->name = $req->name;
        $obj->sort_name = $req->shortName;
        $obj->established_at = $req->estAt;
        if($obj->save()){
            return redirect('department/all');
        }

    }
    
}
