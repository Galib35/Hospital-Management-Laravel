<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

use App\Models\BlogeModel;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\App;

class BlogController extends Controller

{
    //

    public function show()
    {
        $blogs = BlogModel::all();
        
        return view('blogs', compact( 'blogs'));
    }
    
}
