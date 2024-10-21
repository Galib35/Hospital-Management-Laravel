<?php

namespace App\Http\Controllers;

use App\Models\DoctorModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DcotorsController extends Controller
{
    //

    public function index2()
    {
        $doctors = DoctorModel::all();
        return view('doctors.index', compact('doctors'));
    }

    public function indexx()
    {
        echo " Hi Galib";

    //    return DoctorModel::all();

    $data = DoctorModel::all();

    $data2 = DoctorModel::where('gender', 'Female')->get();

    return view('test', ['data' => $data, 'data2' => $data2]);


    }

    public function insert_data(Request $req){

        $doctors=new DoctorModel;

        $doctors->username=$req->username;
        $doctors->number=$req->username;
        $doctors->email=$req->username;
        $doctors->date=$req->username;
        $doctors->gender=$req->username;
        $doctors->country=$req->username;
        $doctors->password=$req->username;
        $doctors->profile=$req->username;
        $doctors->specialist=$req->username;
        $doctors->status=$req->username;

        $doctors->save;
        


        
    }


    public function hi(){

        return view('test2');
    }

    public function showBookingForm()
{
    $doctors = DoctorModel::all(); // Retrieve all doctors from the database

    return view('test2', ['doctors' => $doctors]);
}
}
