<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'subject' => 'required',
             'message' => 'required'
         ]);
     
         $data = new Contact();
         $data->name = $request->input('name');
         $data->email = $request->input('email');
         $data->subject = $request->input('subject');
         $data->message = $request->input('message');
     
         if ($data->save()) {
             Mail::to('zobirofkir19@gmail.com')->send(new ContactMail($request->all(), $request->input('email')));
             $name = $request->input('name');
             $email = $request->input('email');
             return view('contacts.contact', compact('name', 'email'));
         } else {
             return ["success" => false];
         }
     }
     
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
