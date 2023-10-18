<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use League\Csv\Reader;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\User;
use App\Models\Mlos;
use App\Models\Programme;
use App\Models\Assessment;


class CSVController extends Controller
{
  
    

    public function viewModuleCSV()
    {

        return view('admin.module_csv');
    }
    
    
    
    public function moduleCSV(Request $request)
    {
        $request->validate([
            'data_type' => 'required|in:modules,users,mlos,programmes,assessments',
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);
    
        if ($request->hasFile('csv_file')) {
            $path = $request->file('csv_file')->getRealPath();
            $data = array_map('str_getcsv', file($path));
    
            // Skip the first row (header) of the CSV
            $header = array_shift($data);
    
            // Define the model class based on data_type
            if ($request->data_type === 'modules') {
                $modelClass = Module::class;
            } elseif ($request->data_type === 'users') {
                $modelClass = Tutor::class;
            } elseif ($request->data_type === 'mlos') {
                $modelClass = Mlos::class;
            } elseif ($request->data_type === 'programmes') {
                $modelClass = Programme::class;
            }elseif ($request->data_type === 'assessments') {
                $modelClass = Assessment::class;
            }
    
            // Define $fillableColumns based on data_type (adjust this as per your CSV structure)
            if ($request->data_type === 'modules') {
                $fillableColumns = ['programme_title', 'module_code', 'module_title', 'module_lead', 'level', 'credits'];
            } elseif ($request->data_type === 'users') {
                $fillableColumns = ['username', 'name', 'email', 'password'];
            } elseif ($request->data_type === 'mlos') {
                $fillableColumns = ['module_code', 'mlo_number', 'mlo_description'];
            }elseif ($request->data_type === 'programmes') {
                $fillableColumns = ['programme_title','programme_director','deputy_programme_director'];
            }elseif ($request->data_type === 'assessments') {
                $fillableColumns = ['assessment_type','weighting','assessment_deliverable','other_deliverables','issue_date','submission_date','date_submitted_for_moderation','date_moderated','date_form_received'];
            }
            

    
            foreach ($data as $row) {
                $attributes = array_combine($fillableColumns, $row);
    
                // Check for date columns and set them to null if they are empty
                foreach (['issue_date', 'submission_date', 'date_submitted_for_moderation', 'date_moderated', 'date_form_received'] as $dateColumn) {
                    if (isset($attributes[$dateColumn]) && empty($attributes[$dateColumn])) {
                        $attributes[$dateColumn] = null;
                    }
                }
    
                $modelClass::create($attributes);
            }
    
            return redirect()->back()->with('success', 'CSV file uploaded and data inserted successfully.');
        }
    
        return redirect()->back()->with('error', 'Unable to upload CSV file.');
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
