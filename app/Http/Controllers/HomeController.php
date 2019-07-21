<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $imgDic = [];
        $images = DB::table('images')->get();
        foreach ($images as $image) {
            $imgDic[$image->position] = $image; 
        }
        return view('home.index',[
            'imgDic' => $imgDic,
        ]);
    }

    public function homeManage()
    {
        $images = DB::table('images')->get();
        return view('admin.homeManage',[
            'images' => $images,
        ]);
    }

    public function uploadImg(Request $request)
    {
        if ($request->hasFile('image')) {

            try {
                $row = DB::table('images')->where('position',$request->position)->select('image')->first();
                Storage::delete('images/homeImage/' . $row->image);

                //image stuff
                $image = $request->file('image'); //先把檔案存到 $image 變數
                $filename = time() . '.' . $image->getClientOriginalExtension(); //取得檔案完整原檔名再加上 時間在前面
                $location = public_path('images/homeImage/' . $filename);//把圖片url存到$location變數裡面
                Image::make($image)->save($location);//把圖面resize之後存進路徑

                DB::table('images')->where('position',$request->position)
                ->update([
                    'image'=>$filename,
                ]);
            } catch (\Throwable $th) {
                return response($th);
            }

        }

        if($request->alt){
            try {
                DB::table('images')->where('position',$request->position)
                ->update([
                    'alt'=>$request->alt,
                ]);
            } catch (\Throwable $th) {
                return response($th);
            }
            
        }

        
        return redirect('/homeManage');

        


    }



}
