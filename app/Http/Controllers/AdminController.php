<?php

namespace App\Http\Controllers;



use App\Models\AdminModel;
use App\Models\DoctorModel;
use App\Models\Patient_RecordModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Session\Session;


class AdminController extends Controller
{
    //

    public function showLoginForm()
{
    return view('admin.admin_login');
}

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        

     //   dd($credentials);

 //      dd(Auth::user());

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();

            $variable = 'Login Successful';
        
            // Using dd() function
 //           dd($variable);
 $username = $request->input('username');
 $password = $request->input('password');

    session()->put('admin', $username);
            

          return redirect('admin_dashboard')->with('success', 'You have logged in as an admin.');
        }

        $variable = 'Hello, world!';
        
        // Using dd() function
 //       dd($variable);

        return redirect('admin_login')->with('error', 'Invalid username or password.');
    }

    public function createAccountPage()
    {   
        $variable = 'Hello, world!';
        
        // Using dd() function
        dd($variable);
        return redirect('create-account');
     //   return view('admin.create_account');
    }
    

    public function showCreateAccountForm()
{
 //   return redirect('create-account');
    return view('admin.create_account');
}



public function createAccount(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $username = $request->input('username');
    $password = $request->input('password');

    // $admin = new AdminModel();
    // $admin->username = $username;
    // $admin->password = $password;
    // $admin->save();


    // $username = $request->input('username');
    // $password = $request->input('password');

    // Hash the password
    $hashedPassword = Hash::make($password);

    $admin = new AdminModel();
    $admin->username = $username;
    $admin->password = $hashedPassword; // Store the hashed password
    $admin->save();


    session()->put('admin', $username);

 //   return redirect()->route('create-account')->with('success', 'Admin account created successfully.');
    return redirect('admin_dashboard')->with('success', 'Admin account created successfully.');
}



public function showDashboard()
{   
 //   dd(session()->all());
    return view('admin.admin_dashboard_design');
}

public function adminDashboardCount()
{
    $adminCount = AdminModel::count();
    $doctorCount = DoctorModel::where('status', 'Approve')->count();

    $checkedPatientCount = Patient_RecordModel::where('status', 'checked')->count();
    $pendingDoctorCount = DoctorModel::where('status', 'pending')->count();
    $income = $checkedPatientCount * 600;

    return view('admin.admin_dashboard_design', compact('adminCount', 'doctorCount', 'checkedPatientCount', 'pendingDoctorCount', 'income'));
}


public function showTotalDoctorDashboard()
{

    
        

        return view('admin.total_doctor');
    
    
}

public function showTotalDoctorDashboard2()
{

    
        $doctors = DoctorModel::where('status', 'Approve')->orderBy('date', 'ASC')->get();

        return view('admin.total_doctor', ['doctors' => $doctors]);
    
    
}




public function showDoctorJobRequestDashboard()
{

    
    $doctors = DoctorModel::
    where('status', 'pending')
    ->orderBy('date', 'ASC')
    ->get();

return view('admin.job_request', ['doctors' => $doctors]);
    
}


public function showDoctorJobRequestUpdateStatus($id,$status){


   

 //   $id = $request->input('id');
  //  $status = $request->input('status');

    // dd($id, $status);

    // dd('ador');


    // Perform the necessary logic to update the status

    // $doctors=DoctorModel::where('id',$id)->get();

    try {
        // Perform the necessary logic to update the status

        $doctor = DoctorModel::find($id);

        if ($doctor) {
            $doctor->status = $status;
            $doctor->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'error' => 'Doctor not found']);
        }
    } catch (\Exception $e) {
        // Log the error for debugging purposes
        Log::error('Error updating status: ' . $e->getMessage());

        return response()->json(['success' => false, 'error' => 'An error occurred while updating the status']);
    }
}


public function showPatientAppointmentDashboard()
{
   

    return view('admin.appointment_list');
}
public function collectPatientAppointmentDashboard()
{
    $records = Patient_RecordModel::where('status', 'unchecked')
        ->orderBy('date', 'ASC')
        ->get();

    return view('admin.appointment_list', compact('records'));
}


public function showAdminInfo()
{
    $admins=AdminModel::distinct()->get();

    return view('admin.admin_info',compact('admins'));
}

public function showAdminInfoDelete($id)
{
    $admin = AdminModel::find($id);

        if (!$admin) {
            return redirect()->back()->with('error', 'Admin not found');
        }

        $admin->delete();

        return redirect()->back()->with('success', 'Admin deleted successfully');
}


public function showPreviousPatientInfo()
{
    $records = Patient_RecordModel::where('status', 'checked')
    ->orderBy('date', 'ASC')
    ->get();

return view('admin.patient_record', compact('records'));
}

public function showAppointmentListInfo()
{   
   
    // $status="ador";
    // dd($status);
    $records = Patient_RecordModel::where('status', 'unchecked')
    ->orderBy('date', 'ASC')
    ->get();

return view('admin.appointment_list', compact('records'));
}






public function showDoctorLoginForm()
{
    return view('admin.doctor_login');
}

    public function doctorLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        

     //   dd($credentials);

 //      dd(Auth::user());

        if (Auth::guard('doctor')->attempt($credentials)) {
            $request->session()->regenerate();

            $variable = 'Login Successful';
        
            // Using dd() function
 //           dd($variable);
 $username = $request->input('username');
 $password = $request->input('password');

    session()->put('doctor', $username);
            

          return redirect('doctor_dashboard')->with('success', 'You have logged in as an Doctor.');
        }

        $variable = 'Hello, world!';
        
        // Using dd() function
 //       dd($variable);

        return redirect('doctor_login')->with('error', 'Invalid username or password.');
    }



    public function showDoctorCreateAccountForm()
{
 //   return redirect('create-account');
    return view('admin.doctor_create_account');
}



public function doctorCreateAccount(Request $request)
{
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $username = $request->input('username');
    $password = $request->input('password');

    // $admin = new AdminModel();
    // $admin->username = $username;
    // $admin->password = $password;
    // $admin->save();


    // $username = $request->input('username');
    // $password = $request->input('password');

    // Hash the password
    $hashedPassword = Hash::make($password);

    $doctor = new DoctorModel();
    $doctor->username = $username;
    $doctor->password = $hashedPassword; // Store the hashed password
    $doctor->save();


    session()->put('doctor', $username);

 //   return redirect()->route('create-account')->with('success', 'Admin account created successfully.');
    return redirect('doctor_dashboard')->with('success', 'Doctor account created successfully.');
}


public function showDoctorDashboard()
{   
 //   dd(session()->all());
 $current_patients=Patient_RecordModel::where('doctor_to', session('doctor'))
 -> where('status' , 'unchecked')->get();

 //dd($current_patients);
    return view('admin.doctor_dashboard_design',compact('current_patients'));

}

public function showDoctorDashboardCurrent(){

    $doctor=DoctorModel::where('username', session('doctor'))->get();
    return view('admin.doctor_dashboard_design', compact('doctor'));


}

public function showDoctorCurrentPatient()
{
    $current_patients=Patient_RecordModel::where('doctor_to', session('doctor'))
        -> where('status' , 'unchecked')->get();

        dd($current_patients);

        return view('admin.doctor_dashboard_design', compact('current_patients'));  

}



public function showUncheckedPatient($id,$status)
{
    try {
        // Perform the necessary logic to update the status

        $patient = Patient_RecordModel::find($id);

        if ($patient) {
            $patient->status = $status;
            $patient->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'error' => 'Doctor not found']);
        }
    } catch (\Exception $e) {
        // Log the error for debugging purposes
        Log::error('Error updating status: ' . $e->getMessage());

        return response()->json(['success' => false, 'error' => 'An error occurred while updating the status']);
    }
}


public function showDoctorPreviousPatient()
{
    $previous_patients=Patient_RecordModel::where('doctor_to', session('doctor'))
    -> where('status' , 'checked')->get();

 //   dd($previous_patients);

    return view('admin.specific_doctor_previous_patient', compact('previous_patients'));  
}




    // Other methods in the controller...

    public function adminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/index');
    }


    public function doctorLogout(Request $request)
    {
        Auth::guard('doctor')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/index');
    }




}
