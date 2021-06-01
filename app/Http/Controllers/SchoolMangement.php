<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Detail;

class SchoolMangement extends Controller
{
    public function index()
    {
        return view('front.home.home',[
            'details' => Detail::orderBy('id','desc')->where('status',1)->get(),
            'categories' => Category::where('status',1)->get(),
            
        ]);
    }
    public function category($id)
    {
        return view('front.category.category',[
            'categories' => Category::where('status',1)->get(),
            'details'   => Detail::where ('category_id', $id)->where('status',1)->orderBy('id','desc')->get()
            
        ]);
    }

    
}
