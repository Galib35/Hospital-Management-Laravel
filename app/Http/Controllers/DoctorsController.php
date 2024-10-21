<?php

namespace App\Http\Controllers;

use App\Models\AppointmentModel;
use App\Models\DoctorModel;
use App\Models\Patient_RecordModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class DoctorsController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form inputs
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'number' => 'required',
            'email' => 'required|email',
            'date' => 'required|date',
            'gender' => 'required',
            'country' => 'required',
            'password' => 'required',
        ]);
    
        // Check if the validation fails
        if ($validator->fails()) {
            return redirect('doctors')->withErrors($validator)->withInput();
        }
    
        // If validation passes, create a new Doctor model instance
        $doctor = new DoctorModel();
    
        // Assign the form inputs to the Doctor model attributes
        $doctor->username = $request->input('name');
        $doctor->number = $request->input('number');
        $doctor->email = $request->input('email');
        $doctor->date = $request->input('date');
        $doctor->gender = $request->input('gender');
        $doctor->country = $request->input('country');
        $doctor->password = $request->input('password');
    
        // Save the Doctor model to the database
        $doctor->save();
    
        // Redirect the user back to the form page
        return redirect('doctors');
    }


    public function showDoctor(){

        $doctors = DoctorModel::whereNotNull('profile')->get();

        return view('doctors', compact('doctors'));

        // return view('doctors');
    }
    
}
