<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function index()
    {
        $portfolio=Portfolio::all();
        return view('dashboard.portfolio.portfolio')->with('portfolios',$portfolio);
    }
    
    public function create()
    {
        return view('dashboard.portfolio.add_portfolio');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:50',
            'name_ar' => 'required|string|max:50',
            'description' => 'required|string|max:100',
            'description_ar' => 'required|string|max:100',
            'image' => 'required|mimes:jpeg,png,jpg'
        ]);
        
        $image_name = time().'_'.$request->image->getClientOriginalName();
        $request->image->move(public_path('assets/img/portfolio'),$image_name);

        Portfolio::create(
            [
                'name' =>['en' => $request->name , 'ar' => $request->name_ar],
                'description' =>['en' => $request->description , 'ar' => $request->description_ar],
                'image' => $image_name
            ]
            );
            return redirect()->route('portfolio.create')->with('success', 'The addition process was completed successfully');

    }


    public function edit(string $id)
    {
        $portfolio = portfolio::where('id',$id)->first();
        return view('dashboard.portfolio.edit_portfolio')->with('portfolio',$portfolio);
    }

    public function update(Request $request, string $id)
    {
        $portfolio = portfolio::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:50',
            'name_ar' => 'required|string|max:50',
            'description' => 'required|string|max:100',
            'description_ar' => 'required|string|max:100'
        ]);
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_name = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('assets/img/portfolio'), $image_name);
            $portfolio->update(['image' => $image_name]);
        }

        $portfolio->update(
            [
                'name' =>['en' => $request->name , 'ar' => $request->name_ar],
                'description' =>['en' => $request->description , 'ar' => $request->description_ar],
            ]
            );
            return redirect()->route('portfolio.edit',['portfolio'=>$portfolio->id])->with('success', 'Modified successfully');

    }

    public function destroy(string $id)
    {
        portfolio::findOrFail($id)->delete();
        return redirect()->route('portfolio.index');
    }
}
