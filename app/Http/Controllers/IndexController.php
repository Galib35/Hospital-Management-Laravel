<?php

namespace App\Http\Controllers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class IndexController extends Controller
{

    public function show($id){

        return view('service', compact('id'));
    }

}