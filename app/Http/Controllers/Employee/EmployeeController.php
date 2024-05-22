<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employees\Employee;

class EmployeeController extends Controller {

    public function index() {
        $employees = Employee::all();
       
        
        return view('employees.index',compact('employees'));
    }

    public function create() {
        return view('employees.store');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required'
        ]);
        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success','register successfully');
    }
    //show
    public function show($id){
        $employees = Employee::find($id);
        return view('employees.show',compact('employees'));
    }
    //view edit page
    public function edit($id){
        $employee = Employee::find($id);
        return view('employees.edit',compact('employee'));
    }
    //update
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required'
        ]);
        $employee = Employee ::find($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success','Updated Successfully');
    }
    //delete
    public function distroy($id){
        $employee = Employee::find($id);
        $employee->delete();
        return redirect()->route('employees.index')->with('success','Deleted Successfully'); 
    }
}
