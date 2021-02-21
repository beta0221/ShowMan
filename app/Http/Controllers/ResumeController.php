<?php

namespace App\Http\Controllers;

use App\resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['create','store','getResume']);
    }


    public function getResume(Request $request){

        $draw = $request->draw;
        $row = $request->start;
        $rowperpage = $request->length;

        $count = resume::count();;
        $query = new resume();
        $query = $query->take($rowperpage);
        if($row){
            $query->skip($row);
        }
        $result = $query->get();
        
        return response([
            'draw'=>intval($draw),
            'iTotalRecords'=>$count,
            'iTotalDisplayRecords'=>$count,
            'data'=>$result,
        ]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$resumes = Resume::all();
        
        return view('resume.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resume.create');
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
            'gender'=>'required|boolean',
            'birthday'=>'required',
            'tel'=>'required|max:255',
            'phone'=>'required|max:255',
            'email'=>'required|email',
            'height'=>'required|integer',
            'weight'=>'required|integer',
            'address'=>'required|max:255',
            'edu'=>'required|max:255',
            'school'=>'required|max:255',
            'experience'=>'required|max:1000',
            'skill'=>'max:1000',
            'about'=>'max:1000',
        ]);

        try {
            resume::create($request->all());
        } catch (\Throwable $th) {
            // return redirect('/resume/create')->with('status','傳送失敗，資料格式有誤。');
            return response($th);
        }

        return redirect('/resume/create')->with('status','傳送成功，我們已收到您的履歷。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(resume $resume)
    {   
        return view('resume/show',['resume'=>$resume]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(resume $resume)
    {
        //
    }
}
