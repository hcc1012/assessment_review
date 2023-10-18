<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Programme;
use League\Csv\Reader;

class ModuleCRUDController extends Controller
{


    public function createModule()
    {
        $dataTypes = ['programme_title','module_code', 'module_title', 'module_lead', 'level', 'credits'];
        
        return view('admin.create_modules', compact('dataTypes'));
    }
    
    public function storeModule(Request $request)
    {
        $request->validate([
            'programme_title' => 'required|string',
            'module_code' => 'required|string|unique:modules',
            'module_title' => 'required|string|unique:modules',
            'module_lead' => 'required|string',
            'level' => 'required|numeric|between:1,10',
            'credits' => 'required|integer|between:10,100',
        ], [
            'module_code.unique' => 'This module code already exists.',
            'module_title.unique' => 'This module title already exists.',
            'level.between' => 'The level must be between 1 and 10.',
            'level.between' => 'The level must be between 10 and 100.',
        ]);
    

    
        $data = $request->except('_token');
    
        Module::create($data);
    
        return redirect()->route('admin.create_modules')->with('success', 'Module created successfully.');
    }
  

     public function viewModuleCSV()
    {

        return view('admin.module_csv');
    }
    
    
    
    public function moduleCSV(Request $request)
    {
        $request->validate([
            'data_type' => 'required|in:modules',
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
            } 
    
            // Define $fillableColumns based on data_type (adjust this as per your CSV structure)
            if ($request->data_type === 'modules') {
                $fillableColumns = ['programme_title', 'module_code', 'module_title', 'module_lead', 'level', 'credits'];
            } 

    
            foreach ($data as $row) {
                $attributes = array_combine($fillableColumns, $row);
            
                $modelClass::updateOrInsert(
                    ['module_code' => $attributes['module_code'], 'module_title' => $attributes['module_title']],
                    $attributes
                );
            }
            
    
            return redirect()->back()->with('success', 'CSV file uploaded and data inserted successfully.');
        }
    
        return redirect()->back()->with('error', 'Unable to upload CSV file.');
    }
    
    public function viewModule()
{
    $module = Module::all();

    return view('admin.view_modules', compact('module'));
}


public function editModule($id)
{
    $module = Module::findOrFail($id);
    return view('admin.edit_modules', compact('module'));
}

public function updateModule(Request $request, $id)
{
    $request->validate([
        'programme_title' => 'required|string',
        'module_code' => 'required|string|unique:modules,module_code,' . $id,
        'module_title' => 'required|string|unique:modules,module_title,' . $id,
        'module_lead' => 'required|string',
        'level' => 'required|numeric|between:1,10',
        'credits' => 'required|integer|between:10,100',
    ], [
        'module_code.unique' => 'This module code already exists.',
        'module_title.unique' => 'This module title already exists.',
        'level.between' => 'The level must be between 1 and 10.',
        'credits.between' => 'Credits must be between 10 and 100.',
    ]);

    $data = $request->except('_token', '_method');
    
    Module::where('id', $id)->update($data);

    return redirect()->route('admin.view_modules')->with('success', 'Module updated successfully.');
}


public function deleteModules($id)
{
    $module = Module::findOrFail($id);
    $module->delete();

    return redirect()->route('admin.view_modules')->with('success', 'Module deleted successfully.');
}

}
