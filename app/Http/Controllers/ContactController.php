<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;
use App\Models\Country;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $contacts = Contact::orderBy('first_name', 'asc')->paginate(10);
        $countries = Country::all();
        return view('contacts.index', compact('contacts'));
        // return view('contacts.index');
    }

    public function create(){
        $company = Company::all();
        return view('contacts.create', compact('company'));
    }

    
 



    public function show($id)
    {
       $contacts =Contact::findOrFail($id);
       $companies =Company::findOrFail($id);
       $countries =Country::findOrFail($id);


       return view('contacts.show', compact('contacts','companies','countries'));
    }

    public function store(Request $request)
    {
    $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->company_id = $request->company_id;
        $contact->country_id = $request->country_id;

        $contact->save();

        return redirect()->route('contacts.index')->with('success', 'Contact created Successfully!');

    }


    public function edit($id)
    {
      $contacts =contact::find($id);
      $companies =Company::find($id);
      $countries =Country::findOrFail($id);

       return view('contacts.edit',compact('contacts','companies','countries'));
    }

    
    public function update(Request $request, $id)
    {
      $contacts =contact::find($id);
      $companies =Company::find($id);
      $countries =Country::findOrFail($id);

      $contacts->first_name = $request->input('first_name');
      $contacts->last_name = $request->input('last_name');
      $contacts->email = $request->input('email');
      $companies->name = $request->input('name');
      $countries->countryName = $request->input('countryName');


      $contacts->update();




      return  redirect()->route('contacts.index')->with('success', 'Updated Successfully');
    }


    public function destroy($id)
    {
        $contacts = Contact::find($id);
        $contacts->delete();

        return  redirect()->route('contacts.index')->with('success', 'delete');
    }
}