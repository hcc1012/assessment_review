<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assessment; 
use App\Models\User; 
use App\Models\Tutor; 
use App\Models\Module; 
use App\Models\Role; 
use App\Models\Programme; 

class AssignRolesController extends Controller
{

    public function showForm()
    {
        $programmes = Programme::all();
        $modules = Module::all();
        $users = User::all();
        $roles = Role::all();

        return view('admin.assign_roles', compact('programmes', 'modules', 'users', 'roles'));
    }

    

    public function submitForm(Request $request)
    {
        $userId = $request->input('userID');
        $programmeId = $request->input('programmeID');
        $roleId = $request->input('roleID');
        $moduleId = $request->input('moduleID');

        $user = User::find($userId);
        $programme = Programme::find($programmeId);
        $module = Module::find($moduleId);
        $role = Role::find($roleId);

        $user->roles()->attach($role->id);
        $user->modules()->sync([$module->id => ['programmeID' => $programme->id, 'roleID' => $role->id]]);

        

        return redirect()->route('admin.assign_roles')->with('success', 'Form submitted successfully');
    }
}

