<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['create','store']);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index',[
            'contacts'=>$contacts,
        ]);
    }

    public function getContact(Request $request)
    {
        
        $draw = $request->draw;
        $row = $request->start;
        $rowperpage = $request->length;

        $count = Contact::count();
        $query = new Contact();
        $query = $query->take($rowperpage);
        if($row){
            $query->skip($row);
        }
        $result = $query->orderBy('id','desc')->get();
        
        return response()->json([
            'draw'=>intval($draw),
            'iTotalRecords'=>$count,
            'iTotalDisplayRecords'=>$count,
            'aaData'=>$result,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'phone'=>'required|max:255',
            'message'=>'required',
        ]);

        try {
            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->save();
            // Contact::create($request->all());
        } catch (\Throwable $th) {
            return redirect('/contact/create')->with('status','傳送失敗');
            // return response($th);
        }

        return redirect('/contact/create')->with('status','傳送成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }

    public function getMessage(Request $res){
        
        $contact = Contact::findOrFail($res->id);

        return response()->json([
            'm'=>$contact->message,
            's'=>1,
        ]);

    }
}
