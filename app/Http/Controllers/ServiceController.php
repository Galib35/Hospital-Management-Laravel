<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServiceModel;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\App;

class ServiceController extends Controller
{
    //

    public function show($id)
    {
        $services = ServiceModel::all();
        
        return view('service', compact('id', 'services'));
    }
    
}
