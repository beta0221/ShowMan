<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{




    public function admin_index(){
        return view('admin.news');
    }

    public function api_admin_getNews(Request $request){
        $draw = $request->draw;
        $row = $request->start;
        $rowperpage = $request->length;

        $count = News::count();
        $query = new News();
        $query = $query->take($rowperpage);
        if($row){
            $query->skip($row);
        }
        $newsList = $query->orderBy('top','desc')->orderBy('id','desc')->get();

        foreach ($newsList as $news) {
            $news->is_top = '';
            if($news->top){
                $news->is_top = '＊';
            }
            if(strlen($news->body) >20){
                $news->body = substr($news->body,0,20) . '...';
            }
        }

        return response([
            'draw'=>intval($draw),
            'iTotalRecords'=>$count,
            'iTotalDisplayRecords'=>$count,
            'aaData'=>$newsList,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsList = News::orderBy('top','desc')->orderBy('id','desc')->paginate(10);

        foreach ($newsList as $news) {
            $time = strtotime($news->created_at);
            $news->date = date('Y-m-d',$time);
        }
        

        return view('news/index',[
            'newsList'=>$newsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createNews');
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
            'title'=>'required|max:255',
            'body'=>'required',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->slug = uniqid();
        $news->body = $request->body;
        if($request->top){
            $news->top = 1;
        }
        try {
            $news->save();
        } catch (\Throwable $th) {
            return $th;
            return redirect('/admin/news/create')->with('status','新增失敗');
        }
        
        return redirect('/admin/news');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $news = News::where('slug',$slug)->firstOrFail();
        return view('news.show',[
            'news'=>$news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $news = News::where('slug',$slug)->firstOrFail();
        return view('admin.editNews',[
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$slug)
    {
        $news = News::where('slug',$slug)->firstOrFail();
        $news->title = $request->title;
        $news->body = $request->body;
        $news->top = 0;
        if($request->has('top')){
            $news->top = 1;
        }
        try {    
            $news->save();
        } catch (\Throwable $th) {
            return $th;
            return redirect('/admin/news/'.$slug.'/edit')->with('status','更新失敗');//throw $th;
        }
        return redirect('/admin/news');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $news = News::where('slug',$slug)->firstOrFail();
        $news->delete();

        return response('success');
    }
}
