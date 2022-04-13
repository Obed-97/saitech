<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Auth;
use Alert;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Contact::orderBy('id','desc')->get(); 
        $lu = Contact::where('statut','lu')->get(); 
        return view('admin.message.index', compact('messages','lu'));
    }

    public function lire()
    {
        
        $lu = Contact::where('statut','lu')->get(); 
        return view('admin.message.lu', compact('lu'));
    }

    public function nonlu()
    {
        
        $nonlu = Contact::where('statut','non lu')->get(); 
        return view('admin.message.nonlu', compact('nonlu'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    public function lu(Request $request, $id){

        $status = "lu";

        $contact = Contact::where('id', $id)->firstOrFail();

        $contact->update([
            'user_id'=> Auth::user()->id,
            'statut'=> $status,
        ]);

        Alert::info('Message lu !');
        return redirect()->route('messages.index');
    }
}
