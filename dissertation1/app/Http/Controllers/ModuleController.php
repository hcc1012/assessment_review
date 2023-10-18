<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Mlos; 
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{
    public function showForm($projectId)
    {
        $module = DB::table('projects')
        ->join('modules', 'projects.moduleID', '=', 'modules.id')
        ->where('projects.id', $projectId)
        ->select('modules.*')
        ->first();

        // Retrieve MLO data from the Mlo model
        $mloData = Mlos::all(); // Adjust this as per your Mlo model structure

        return view('admin.module_information', compact('module', 'mloData', 'projectId'));
    }

    // ... other methods ...

    public function updateModule(Request $request, $projectId)
    {
        // Validate the request data
        $request->validate([
            'module_code' => 'required|string|max:20',
            'module_title' => 'required|string|max:20',
            'module_lead' => 'required|string|max:100',
            'level' => 'required|numeric',
            'credits' => 'required|integer',
            'mlo_code' => 'nullable|string', // Add validation for MLO fields as needed
            'mlo_number' => 'nullable|integer',
            'mlo_description' => 'nullable|string',
        ]);
    
        // Fetch the module based on the projectId
        $module = DB::table('projects')
            ->join('modules', 'projects.moduleID', '=', 'modules.id')
            ->where('projects.id', $projectId)
            ->select('modules.*')
            ->first();
    
        if (!$module) {
            return back()->with('error', 'Module not found for the given project ID.');
        }
    
        // Fill the module model with the validated data
        $module->module_code = $request->input('module_code');
        $module->module_title = $request->input('module_title');
        $module->module_lead = $request->input('module_lead');
        $module->level = $request->input('level');
        $module->credits = $request->input('credits');
        // Update other fields as needed
    
        
        // Save the module
        $module->save();
    
        // Redirect with a success message
        return redirect()->route('admin.module_information.show', ['projectId' => $projectId])
            ->with('success', 'Module updated successfully');
    }
    
}
