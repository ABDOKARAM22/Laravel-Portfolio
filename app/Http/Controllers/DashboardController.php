<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function dashboard(){
        return view('dashboard.dashboard');
    }
    
    public function home(){
        return view('dashboard.home');
    }
    
    public function save_home(Request $request){
        $home = Home::findOrFail(1);
        $request->validate([
            'image' => 'required|mimes:jpeg,png,jpg'
        ]);
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_name = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('assets/img/Home-About'), $image_name);
            $home->update(['image' => $image_name]);
            return redirect()->route('dashboard.home')->with('success', 'Modified successfully');
        }
        
    }
    
    public function about(){
        $about = About::where('id',1)->get();
        return view('dashboard.About_us')->with('abouts',$about);
    }
    
    public function save_about(Request $request){
        $about = About::FindOrFail(1);
        $request->validate([
            'title' => 'required|string',
            'title_ar' => 'required|string',
            'description' => 'required',
            'description_ar' => 'required'
        ]);

        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_name = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('assets/img/Home-About'), $image_name);
            $about->update(['image' => $image_name]);
        }

        $about->update([
            'title'=>[
                'en'=>$request->title ,
                'ar'=>$request->title_ar
            ],
            'description'=>[
                'en'=>$request->description ,
                'ar'=>$request->description_ar
            ]
        ]);

        return redirect()->route('dashboard.about')->with('success', 'Modified successfully');
    }


}
