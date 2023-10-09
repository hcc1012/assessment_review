<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assessment; 
use App\Models\User; 
use App\Models\Tutor; 
use App\Models\Module; 
use App\Models\CaseModel; 

class AssignRolesController extends Controller
{

    public function showAssignRolesForm()
    {
        // Retrieve assessments and users from your database tables
        $assessments = Assessment::all();
        $users = User::all();

        return view('admin.assign_roles', compact('assessments', 'users'));
    }

    public function assignRoles(Request $request)
    {
        // Validate the request data
        $request->validate([
            'assessment_id' => 'required|exists:assessments,id',
            'user_id' => 'required|exists:users,id',
            'role' => 'required|in:assessor,internal_mod,external_examiner,prog_director',
            // Add validation rules for other fields as needed
        ]);

        // Create a new record in the cases table
        cases::create([
            'assessmentID' => $request->assessment_id,
            'tutorID' => null, // If not applicable, set to null
            'moduleID' => null, // If not applicable, set to null
            'userID' => $request->user_id,
            'roleID' => $this->getRoleId($request->role), // Define a function to get role IDs
        ]);

        return redirect()->route('admin.assign_roles')
            ->with('success', 'Role assigned successfully');
    }

}

