<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Portfolio;
use App\Models\service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    
    public function Welcome(){
        $home = Home::select('image')->get();
        $services = service::all();
        $team= Team::all();
        $portfolio= Portfolio::all();
        $contact= Contact::all();
        $about= About::all();
        $app_lang= App::getLocale();
        return view('welcome',
        ['services' => $services,
        'teams'=>$team,
        'portfolios'=>$portfolio,
        'contacts'=>$contact,
        'abouts'=>$about,
        'homes'=>$home,
        'app_lang' => $app_lang
        ]);
    }

}

