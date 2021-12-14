<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contactos', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = Contact::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'topic' => $request->topic,
            'comment' => $request->comment,
        ]);

        return redirect()->route('contacts.index')->withSuccess("Comentário submetido com sucesso");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contactDel = Contact::find($id);
        $contactDel->delete();
        return redirect()->route('contacts.index')->withSuccess("Mensagem apagada!");
    }
    public function sendEmail(Request $request)
    {
       dd($request->all());

      $data = [
        'subject' => $request->subject,
        'email' => $request->email,
        'address' => $request->address,
      ];

    //   Mail::send('email-template', $data, function($message) use ($data) {
    //     $message->to($data['email'])
    //     ->subject($data['subject']);
    //   });

    //   return back()->with(['message' => 'Email successfully sent!']);
       
    }

    public function email(Contact $contact)
    {
        return view('email')->with(compact('contact'));
    }


}
