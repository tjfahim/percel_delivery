<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contacts', ['contacts' => $contacts]);
    }

    // Function to store a new contact form submission (POST request)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        
        // Create a new instance of the Contact model
        $contact = new Contact([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);
        
        // Save the new contact to the database
        $contact->save();
        
        // Redirect back to the current page
        return back()->with('success', 'Contact form submitted successfully.');
    }

    // Function to delete a contact form submission (DELETE request)
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact form submission deleted successfully.');
    }
}
