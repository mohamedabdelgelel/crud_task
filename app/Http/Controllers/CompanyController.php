<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyPostRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Image;
class CompanyController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $companies=Company::paginate(10);
        return view('company.index',compact('companies'));
    }
    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        return view('company.create');
    }
    /**
     * Show the form for editing the specified resource.
     *

     */
    public function edit(Company $company)
    {

        return view('company.edit',compact('company'));
    }
    /**
     * Remove the specified resource in storage.

     */
    public function destroy(Company $company)
    {

        $company->delete();
        return redirect()->route('company.index')->with('success', 'Company deleted Successfully');
    }
    /**
     * Update the specified resource in storage.

     */
    public function update(Company $company,CompanyPostRequest $request)
    {
    

    
        $company->update($request->all());


        return redirect()->route('company.index')->with('success', 'Company Updated Successfully');

    }
    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(CompanyPostRequest $request)
    {
    

        Company::create($request->all());
        return redirect()->route('company.index')->with('success', 'Company Created Successfully');
    }
    /**
     * Update the specified resource in storage.

     */

}
