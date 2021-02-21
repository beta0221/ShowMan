<?php

namespace App\Http\Controllers;

use App\wanted;
use Illuminate\Http\Request;

class WantedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create','store','getWanted']);
    }

    public function getWanted(Request $request){
        $draw = $request->draw;
        $row = $request->start;
        $rowperpage = $request->length;

        $total = wanted::count();;
        
        $query = new wanted();
        $query = $query->take($rowperpage);
        if($row){
            $query->skip($row);
        }
        $result = $query->get();
        
        return response()->json([
            'draw'=>intval($draw),
            'iTotalRecords'=>$total,
            'iTotalDisplayRecords'=>$total,
            'aaData'=>$result,
        ]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$wanted = wanted::all();
        return view('wanted.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wanted.create');
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
            'company_id'=>'required|max:255',
            'company_name'=>'required|max:255',
            'contact_name'=>'required|max:255',
            'contact_phone'=>'required|max:255',
            'fax'=>'required|max:255',
            'email'=>'required|email',
            'address'=>'required|max:1000',
            'wanted_cat'=>'required|max:255',
            'content'=>'max:1000',
            'other'=>'max:1000',
        ]);

        try {
            wanted::create($request->all());
        } catch (\Throwable $th) {
            return redirect('/wanted/create')->with('status','傳送失敗，資料格式有誤。');
        }

        return redirect('/wanted/create')->with('status','傳送成功，我們已收到您的需求。');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\wanted  $wanted
     * @return \Illuminate\Http\Response
     */
    public function show(wanted $wanted)
    {
        return view('wanted.show',['wanted'=>$wanted]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\wanted  $wanted
     * @return \Illuminate\Http\Response
     */
    public function edit(wanted $wanted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\wanted  $wanted
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wanted $wanted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\wanted  $wanted
     * @return \Illuminate\Http\Response
     */
    public function destroy(wanted $wanted)
    {
        //
    }
}
