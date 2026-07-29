<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

public function store(Request $request)
{
    $request->validate([
    'name' => 'required|string|max:100',
    'email' => 'required|email|max:255',
    'phone' => 'nullable|string|max:20',
    'company' => 'nullable|string|max:255',
    'service' => 'required',
    'budget' => 'required',
    'message' => 'required|min:10',
]);
    Contact::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'company' => $request->company,
        'service' => $request->service,
        'budget' => $request->budget,
        'message' => $request->message,
    ]);

    return redirect('/#contact')
    ->with('success', '✅ Thank you! Your enquiry has been submitted successfully.');
}
    
}