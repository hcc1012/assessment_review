<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use League\Csv\Reader;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Tutor;
use App\Models\Role;
use App\Models\User;


class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    

    public function index()
    {

    
        return view('admin.upload_csv');
    }
    
    
    
  

    public function viewTutors()
{
    // Retrieve the tutor data from the database
    $tutors = Tutor::all();

    // Pass the tutor data to a view
    return view('admin.view_tutors', compact('tutors'));
}

public function viewModules()
{
    $modules = Module::all();

    return view('admin.view_modules', compact('modules'));
}

}
