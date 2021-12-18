<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', ['contacts' => $contacts]);
    }

    public function edit(Contact $contact){
        return view('contacts.edit', ['contact' => $contact]);
    }

    public function update(Contact $contact){
        request()->validate([
             'name' => 'required|min:5|string|max:255',
             'contact' => 'required|min:9|max:9',
             'email'=>'required|email|string|max:255',

         ]);

         $contact->update([
             'name' => request('name'),
             'contact' => request('contact'),
             'email' => request('email'),
         ]);

         return redirect('/contacts');
    }

     public function create(){
         return view('contacts.create');
     }

     public function store(){

         request()->validate([
             'name' => 'required',
             'contact' => 'required',
             'email' => 'required',
         ]);

         Contact::create([
             'name' => request('name'),
             'contact' => request('contact'),
             'email' => request('email')
         ]);

         return redirect('/contacts');
     }

     public function destroy(Contact $contact){
         $contact -> delete();
         return redirect('/contacts');
     }

     public function detail(Contact $contact){
        return view('contacts.detail', ['contact' => $contact]);
    }
}
