<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // List all contacts
    function index(){
        return view('contacts.index');
    }

    // Return a create contact form
    function create(){
        return view('contacts.create');
    }

    function show($id) {
        $contact = Contact::find($id); // Retrieve contact as an obj
        return view('contacts.show', compact('contact')); // Convert obj to array
    }
}
