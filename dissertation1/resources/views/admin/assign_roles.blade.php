@extends('admin.admin_dashboard')
@section('admin')
<br><br><br><br>
<div class="container">
        <h1>Assign Roles</h1>
        <form method="POST" action="{{ route('admin.assign_roles.store') }}">
            @csrf

            <!-- Select Assessment -->
            <div class="form-group">
                <label for="assessment_id">Select Assessment:</label>
                <select id="assessment_id" name="assessment_id" class="form-control" required>
                    <!-- Populate assessment options from your assessments table -->
                    @foreach ($assessments as $assessment)
                        <option value="{{ $assessment->id }}">{{ $assessment->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Select User -->
            <div class="form-group">
                <label for="user_id">Select User:</label>
                <select id="user_id" name="user_id" class="form-control" required>
                    <!-- Populate user options from your users table -->
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Select Role -->
            <div class="form-group">
                <label for="role">Select Role:</label>
                <select id="role" name="role" class="form-control" required>
                    <!-- Populate role options -->
                    <option value="assessor">Assessor</option>
                    <option value="internal_mod">Internal Moderator</option>
                    <option value="external_examiner">External Examiner</option>
                    <option value="prog_director">Programme Director</option>
                    <!-- Add other roles as needed -->
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Assign Role</button>
        </form>
    </div>
@endsection
