<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeePostRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Image;
class EmployeeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $employees=Employee::paginate(10);
        return view('employee.index',compact('employees'));
    }
    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        $companies=Company::all();

        return view('employee.create',compact('companies'));
    }
    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(Employee $employee)
    {
        $companies=Company::all();
        return view('employee.edit',compact('employee','companies'));
    }
    /**
     * Remove the specified resource in storage.

     */
    public function destroy(Employee $employee)
    {

        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee deleted Successfully');
    }
    /**
     * Update the specified resource in storage.

     */
    public function update(Employee $employee,EmployeePostRequest $request)
    {
    
        $employee->update($request->all());


        return redirect()->route('employee.index')->with('success', 'Employee Updated Successfully');

    }
    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(EmployeePostRequest $request)
    {
        
        Employee::create($request->all());


        return redirect()->route('employee.index')->with('success', 'Employee Created Successfully');
    }
    /**
     * Update the specified resource in storage.

     */
    
}
