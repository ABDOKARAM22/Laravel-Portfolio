<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class ContactController extends Controller
{




    public function index()
    {
        $contact = Contact::findOrFail(1);
        return view('dashboard.contact')->with('contact',$contact);
    }
    

    
    public function update(Request $request, string $id)
    {
        $contact = Contact::findOrFail($id);
        $request->validate([
            'phone' => 'required',
            'email' => 'required|email|string',
            'location' => 'required',
            'location_ar' => 'required',
            'behance' => 'required',
            'facebook' => 'required',
            'instegram' => 'required',
            'twitter' => 'required'
        ]);
        
        $contact->update([
            'phone' => $request->phone,
            'email' => $request->email,
            'behance' => $request->behance,
            'facebook' => $request->facebook,
            'instegram' => $request->instegram,
            'twitter' => $request->twitter,
            'location' =>['en'=>$request->location, 'ar'=>$request->location_ar]
        ]);
        return redirect()->route('contact.index')->with('success', 'Modified successfully');
    }


}
