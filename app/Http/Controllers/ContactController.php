<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('contact.index');
    }

    public function getContact(Request $request)
    {
        
        $draw = $request->draw;
        $row = (string)$request->start;
        $rowperpage = (string)$request->length;

        $count = DB::table('contacts')->count();
        $result = Contact::skip($row)->take($rowperpage)->get();
        
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
            Contact::create($request->all());
        } catch (\Throwable $th) {
            return redirect('/contact/create')->with('status','傳送失敗');
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
}
