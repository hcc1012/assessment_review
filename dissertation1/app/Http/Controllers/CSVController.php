<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use League\Csv\Reader;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Tutor;


class CSVController extends Controller
{
  
    

    public function index()
    {

    
        return view('admin.upload_csv');
    }
    
    
    
    public function uploadCSV(Request $request)
    {
        $request->validate([
            'data_type' => 'required|in:modules,tutors',
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);
    
        if ($request->hasFile('csv_file')) {
            $path = $request->file('csv_file')->getRealPath();
            $data = array_map('str_getcsv', file($path));
    
            // Define the model class based on data_type
            $modelClass = ($request->data_type === 'modules') ? Module::class : Tutor::class;
    
            // Define the columns to fill based on data_type
            $fillableColumns = ($request->data_type === 'modules') ? ['module_code', 'module_title', 'module_lead', 'level', 'credits'] : ['username', 'surname', 'firstname', 'email'];
    
            // Skip the first row (header) of the CSV
            array_shift($data);
    
            foreach ($data as $row) {
                $attributes = array_combine($fillableColumns, $row);
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
