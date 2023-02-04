<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function movies ($catId){
        $movies=Movie::where('catId',$catId)->get();
        return view('site.movies',compact('movies'));
    }
}
