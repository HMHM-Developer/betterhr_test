<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    //direct employee list
    public function list(){
        $employees = Employee::when(request('key'),function($query){
                               $query->where('employee_name','like','%'. request('key') .'%');
                               })
                              ->orderBy('employee_id','desc')
                              ->paginate(4);
        //dd($employees->toArray());
        return view('admin.employee.list',compact('employees'));
    }

    //direct create employee page
    public function createPage(){
        return view('admin.employee.create');
    }

    //create employee
    public function create(Request $request){
        // dd($request->all());
        $this->employeeValidationCheck($request);
        $data = $this->requestEmployeeData($request);
        Employee::create($data);
        return redirect()->route('employee#list');
    }

    //delete employee
    public function delete($id){
        //dd($id);
        Employee::where('employee_id',$id)->delete();
        return back();
    }

    //edit employee
    public function edit($id){
        $employee = Employee::where('employee_id',$id)->first();
        return view('admin.employee.edit',compact('employee'));
    }

    //update employee
    public function update($id,Request $request){
        //dd($id,$request->all());
        $this->employeeValidationCheck($request);
        $data = $this->requestEmployeeData($request);
        Employee::where('employee_id',$id)->update($data);
        return redirect()->route('employee#list');
    }

    //employeeValidationCheck
    private function employeeValidationCheck($request){
        Validator::make($request->all(),[
            'employeeName' => 'required',
            'department' => 'required',
            'email'      => 'required',
            'phone'      => 'required',
            'address'    => 'required',
        ])->validate();    
    }

    //requestEmployeeData
        private function requestEmployeeData($request){
            return [
                'employee_name' => $request->employeeName,
                'department'    => $request->department,
                'email'         => $request->email,
                'phone'         => $request->phone,
                'address'       => $request->address,
            ];
        }
}
