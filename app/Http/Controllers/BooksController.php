<?php

namespace App\Http\Controllers;

use App\Models\AppointmentModel;
use App\Models\DoctorModel;
use App\Models\Patient_RecordModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

class BooksController extends Controller
{
    //
    public function submitForm(Request $request)
{
    // $username = $request->input('name');
    // $number = $request->input('number');
    // $email = $request->input('email');
    // $date = $request->input('date');
    // $gender = $request->input('gender');
    // $doctorName = $request->input('doctor');
    // $specialist = $request->input('specialist');

    // if (!empty($username) && !empty($number) && !empty($email) && !empty($date) && !empty($gender) && !empty($doctorName) && !empty($specialist)) {
    //     // Insert into appointment table
    //     AppointmentModel::create([
    //         'patient_name' => $username,
    //         'number' => $number,
    //         'email' => $email,
    //         'date' => $date,
    //         'gender' => $gender,
    //         'doctor_to' => $doctorName,
    //         'specialist' => $specialist,
    //     ]);

    //     // Insert into patient_record table
    //     Patient_RecordModel::create([
    //         'patient_name' => $username,
    //         'number' => $number,
    //         'email' => $email,
    //         'date' => $date,
    //         'gender' => $gender,
    //         'doctor_to' => $doctorName,
    //         'specialist' => $specialist,
    //     ]);
    // }


     $patient=new Patient_RecordModel;
    
    $patient->patient_name=$request->name;
    $patient->number=$request->number;
    $patient->email=$request->email;
    $patient->date=$request->date;
    $patient->gender=$request->gender;
    $patient->doctor_to=$request->doctor;
    $patient->specialist=$request->specialist;
 

    $patient->save();



//     $appointment = new AppointmentModel;

// $appointment->patient_name = $request->name;
// $appointment->number = $request->number;
// $appointment->email = $request->email;
// $appointment->date = $request->date;
// $appointment->gender = $request->gender;
// $appointment->doctor_to = $request->doctor;
// $appointment->specialist = $request->specialist;

// $appointment->save();


   return redirect('index');

}

public function showBookingForm()
{
    $doctors = DoctorModel::all(); // Retrieve all doctors from the database

    return view('index', ['doctors' => $doctors]);
}


}
