<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function movies ($catId){
        $categories = Category::all();
        $movies=Movie::where('catId',$catId)->get();
        return view('site.movies',compact('movies','categories'));
    }

    // public function categories (){
    //     $categories = Category::all();
    //     return view('layoutsfront.header', compact('categories'));
    // }
}
