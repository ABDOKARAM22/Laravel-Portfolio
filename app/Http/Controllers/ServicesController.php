<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = service::all();
        return view('dashboard.services.services')->with('services',$services);
    }

    public function create()
    {
        return view('dashboard.services.add_services');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|unique:services,name|string|max:100',
            'name_ar' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'description_ar' => 'required|string|max:255',
            'icon' => 'required'
        ]);
        service::create(
            [
                'name' =>['en' => $request->name , 'ar' => $request->name_ar],
                'description' =>['en' => $request->description , 'ar' => $request->description_ar],
                'icon' => $request->icon
            ]
            );
            return redirect()->route('services.create')->with('success', 'The addition process was completed successfully');

    }


    public function edit(string $id)
    {
        $service = service::where('id',$id)->first();
        return view('dashboard.services.edit_services',['services'=>$service]);

    }

    public function update(Request $request, string $id)
    {

        
        $service = service::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:services,name|string|max:100',
            'name_ar' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'description_ar' => 'required|string|max:255',
            'icon' => 'required'
        ]);

        $service->update([
            'name' => ['en' => $request->name , 'ar' => $request->name_ar],
            'description' => ['en' => $request->description , 'ar' => $request->description_ar],
            'icon' => $request->icon
        ]);

        return redirect()->route('services.edit',['service'=>$service->id])->with('success', 'Modified Successfully');
    }

    public function destroy(string $id)
    {
        service::findOrFail($id)->delete();
        return redirect()->route('services.index');
    }
}
