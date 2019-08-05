<?php

namespace App\Http\Controllers;

use App\Jobrelease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobreleaseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['getJobRelease','billboard','deleteJob','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobreleases = Jobrelease::all();
        return view('jobrelease.index',[
            'jobreleases'=>$jobreleases,
        ]);
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
            $jobrelease = new Jobrelease();
            $jobrelease->location = $request->location;
            $jobrelease->name = $request->name;
            $jobrelease->holiday = $request->holiday;
            $jobrelease->time = $request->time;
            $jobrelease->welfare = $request->welfare;
            $jobrelease->tel = $request->tel;
            $jobrelease->img = $request->img;
            $jobrelease->info = $request->info;
            $jobrelease->save();

            // Jobrelease::create($request->all());
        } catch (\Throwable $th) {
            return redirect('/jobrelease/create')->with('status','新增失敗');
        }

        return redirect('/jobrelease/create')->with('status','新增成功');
    }


    public function billboard()
    {
        $jobreleases = Jobrelease::all();
        return view('jobrelease.billboard',[
            'jobreleases'=>$jobreleases,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Jobrelease  $jobrelease
     * @return \Illuminate\Http\Response
     */
    public function show(Jobrelease $jobrelease)
    {
        
        return view('jobrelease.show',[
            'job'=>$jobrelease,
        ]);
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

    public function deleteJob(Request $req)
    {
        try {
            $job = Jobrelease::findOrFail($req->id);
            $job->delete();
        } catch (\Throwable $th) {
            return response()->json([
                's'=>0,
            ]);
        }
        return response()->json([
            's'=>1,
        ]);
    }
}
