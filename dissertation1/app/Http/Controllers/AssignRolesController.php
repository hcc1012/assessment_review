<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assessment; 
use App\Models\User; 
use App\Models\Tutor; 
use App\Models\Module; 


class AssignRolesController extends Controller
{

    
    public function showAssignRolesForm()
    {
        $assessments = Assessment::all();
    
        return view('admin.assign_roles', compact('assessments'));
    }
    
    public function assignRoles(Request $request)
    {
        $assessmentId = $request->input('assessment');
        $tutorId = $request->input('tutor');
        $role = $request->input('role');
    
        // Retrieve the user based on $tutorId
        $user = User::find($tutorId);
    
        if (!$user) {
            return redirect()->back()->with('error', 'Tutor not found');
        }
    
        // Update the user's role
        $user->role = $role;
        $user->save();
    
        return redirect()->back()->with('success', 'Role assigned successfully');
    }
    
    
    public function getTutorsForAssessment($assessmentId)
    {
        $assessment = Assessment::find($assessmentId);
    
        $tutors = $assessment->tutors->map(function ($tutor) {
            return [
                'id' => $tutor->id,
                'name' => $tutor->firstname . ' ' . $tutor->surname,
            ];
        })->pluck('name', 'id');
    
        return response()->json(['tutors' => $tutors]);
    }
    
}

