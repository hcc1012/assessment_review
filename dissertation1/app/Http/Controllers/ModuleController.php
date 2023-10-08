<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    public function showForm(Module $module = null)
    {
        // If $module is null, it means you are creating a new module.
        if (!$module) {
            $module = new Module();
        }
    
        return view('admin.module_information', compact('module'));
    }
    


    

    // ... other methods ...

    public function updateModule(Request $request, Module $module)
{
    // Validate the request data
    $request->validate([
        'module_code' => 'required|string|max:20',
        'module_title' => 'required|string|max:20',
        'module_lead' => 'required|string|max:100',
        'level' => 'required|numeric',
        'credits' => 'required|integer',
    ]);

    // Debug the request data (optional)
    // dd($request->all());

    // Fill the module model with the validated data
    $module->fill($request->all());

    // Save the module
    $module->save();

    // Redirect with a success message
    return redirect()->route('admin.module_information.show', ['module' => $module])
        ->with('success', 'Module updated successfully');
}
    
}
