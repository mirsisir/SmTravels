<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;

class ContactsController extends Controller
{


    public function index()
    {
        $contacts = Contact::paginate(25);

        return view('contacts.index', compact('contacts'));
    }


    public function create()
    {
        

        return view('contacts.create');
    }


    public function store(Request $request)
    {

            
            $data = $this->getData($request);
            

            Contact::create($data);

         
            Alert::success('Thanks for the mesage', 'We will contact you as soon as possible. Or you can call us at 01977-118812.');
            return back();

    }


    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contacts.show', compact('contact'));
    }


    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        

        return view('contacts.edit', compact('contact'));
    }


    public function update($id, Request $request)
    {

            
            $data = $this->getData($request);
            
            $contact = Contact::findOrFail($id);
            $contact->update($data);

            return redirect()->route('contacts.contact.index')
                ->with('success_message', 'Contact was successfully updated.');

    }


    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();

            return redirect()->route('contacts.contact.index')
                ->with('success_message', 'Contact was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'name' => '',
            'email' => '',
            'message' => '',
            'phone' => '', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
