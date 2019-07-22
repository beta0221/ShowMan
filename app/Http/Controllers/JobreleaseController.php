<?php

namespace App\Http\Controllers;

use App\Jobrelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobreleaseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['getJobRelease','billboard']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobrelease.index');
    }


    public function getJobRelease(Request $request)
    {
        $draw = $request->draw;
        $row = (string)$request->start;
        $rowperpage = (string)$request->length;

        $count = DB::table('jobreleases')->count();
        $result = Jobrelease::skip($row)->take($rowperpage)->get();
        
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
        return view('jobrelease.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        $request->validate([
            'location'=>'required|max:255',
            'name'=>'required|max:255',
            'holiday'=>'required|max:255',
            'time'=>'required|max:255',
            'welfare'=>'required|max:255',
            'tel'=>'required|max:255',
        ]);

        try {
            Jobrelease::create($request->all());
        } catch (\Throwable $th) {
            return redirect('/jobrelease/create')->with('status','新增失敗');
        }

        return redirect('/jobrelease/create')->with('status','新增成功');
    }


    public function billboard()
    {
        return view('jobrelease.billboard');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Jobrelease  $jobrelease
     * @return \Illuminate\Http\Response
     */
    public function show(Jobrelease $jobrelease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jobrelease  $jobrelease
     * @return \Illuminate\Http\Response
     */
    public function edit(Jobrelease $jobrelease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jobrelease  $jobrelease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jobrelease $jobrelease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jobrelease  $jobrelease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jobrelease $jobrelease)
    {
        //
    }
}
