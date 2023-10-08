<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Tutor;

class EditController extends Controller
{


    public function createModule()
    {
        // Define the dataTypes array with the desired form field names
        $dataTypes = ['module_code', 'module_title', 'module_lead', 'level', 'credits'];
        
        // Pass the dataTypes variable to the view
        return view('admin.create_modules', compact('dataTypes'));
    }
    
    public function storeModule(Request $request)
    {
        // Validate the request data here if needed
        $request->validate([
            'module_code' => 'required|string|max:20',
            'module_title' => 'required|string|max:20',
            'module_lead' => 'required|string|max:100',
            'level' => 'required|numeric',
            'credits' => 'required|integer',
        ]);
    
        // Get all form fields except for _token
        $data = $request->except('_token');
    
        // Create the module using the filtered data
        Module::create($data);
    
        // Redirect or return a response as needed
        return redirect()->route('admin.create_modules')->with('success', 'Module created successfully.');
    }
    public function editModule(Module $module)
    {
        return view('admin.edit_modules', compact('module'));
    }

    public function updateModule(Request $request, Module $module)
    {
        $request->validate([
            'module_code' => 'required|string|max:20',
            'module_title' => 'required|string|max:20',
            'module_lead' => 'required|string|max:100',
            'level' => 'required|integer',
            'credits' => 'required|integer',
        ]);

        // Update the module with the new data
        $module->update([
            'module_code' => $request->module_code,
            'module_title' => $request->module_title,
            'module_lead' => $request->module_lead,
            'level' => $request->level,
            'credits' => $request->credits,
        ]);
        dd($request->all());
        return redirect()->route('admin.modules')->with('success', 'Module updated successfully');
    }
}
