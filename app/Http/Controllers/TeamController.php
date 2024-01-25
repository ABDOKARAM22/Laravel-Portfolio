<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team=Team::all();
        return view('dashboard.team.team')->with('teams',$team);
    }
    
    public function create()
    {
        return view('dashboard.team.add_team');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'first_name_ar' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'last_name_ar' => 'required|string|max:50',
            'job_title' => 'required|string|max:50',
            'job_title_ar' => 'required|string|max:50',
            'image' => 'required|mimes:jpeg,png,jpg'
        ]);
        
        $image_name = time().'_'.$request->image->getClientOriginalName();
        $request->image->move(public_path('assets/img/team'),$image_name);

        Team::create(
            [
                'first_name' =>['en' => $request->first_name , 'ar' => $request->first_name_ar],
                'last_name' =>['en' => $request->last_name , 'ar' => $request->last_name_ar],
                'job_title' =>['en' => $request->job_title , 'ar' => $request->job_title_ar],
                'image' => $image_name
            ]
            );
            return redirect()->route('team.create')->with('success', 'The addition process was completed successfully');

    }

    
    public function edit(string $id)
    {
        $team = Team::where('id',$id)->first();
        return view('dashboard.team.edit_team')->with('team',$team);
    }
    
    public function update(Request $request, string $id)
    {
        $team = Team::FindOrFail($id);

        $request->validate([
            'first_name' => 'required|string|max:50',
            'first_name_ar' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'last_name_ar' => 'required|string|max:50',
            'job_title' => 'required|string|max:50',
            'job_title_ar' => 'required|string|max:50',
        ]);
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image_name = time().'_'.$request->image->getClientOriginalName();
            $request->image->move(public_path('assets/img/team'), $image_name);
            $team->update(['image' => $image_name]);
        }

        $team->update(
            [
                'first_name' =>['en' => $request->first_name , 'ar' => $request->first_name_ar],
                'last_name' =>['en' => $request->last_name , 'ar' => $request->last_name_ar],
                'job_title' =>['en' => $request->job_title , 'ar' => $request->job_title_ar],
            ]
            );
            return redirect()->route('team.edit',['team'=>$team->id])->with('success', 'Modified successfully');

    }

    public function destroy(string $id)
    {
        Team::findOrFail($id)->delete();
        return redirect()->route('team.index');   
    }
}
