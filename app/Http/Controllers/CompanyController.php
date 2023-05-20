<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
  public function index()
    {
        $companies = company::all();

      return view('companies.index', compact('companies'));
    }


    public function create(){
      $company = Company::all();
      return view('companies.create', compact('company'));
  }

  
  public function show($id)
    {
     
       $companies =Company::findOrFail($id);

       return view('companies.show', compact('companies'));
    }


    public function edit($id)
    {
      $companies =Company::find($id);
       return view('companies.edit',compact('companies'));
    }

    
    public function update(Request $request, $id)
    {
      $companies =Company::find($id);
      $companies->name = $request->input('name');
      $companies->email = $request->input('email');
      $companies->address = $request->input('address');
      $companies->website = $request->input('website');

      
    //   $companies->name = $request->input('name');

      $companies->update();




      return  redirect()->route('companies.index')->with('success', 'Updated Successfully');
    }


    public function destroy($id)
    {
        $companies = Company::find($id);
        $companies->delete();

        return  redirect()->route('companies.index')->with('success', 'delete');
    }




    public function store(Request $request)
    {
    $company = new Company;
        $company->name = $request->name;
        $company->address = $request->address;
        $company->email = $request->email;
        $company->website = $request->website;
      
       
        $company->save();

        return redirect()->route('companies.index')->with('success', 'company created Successfully!');

    }











}
