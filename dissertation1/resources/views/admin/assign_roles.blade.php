@extends('admin.admin_dashboard')
@section('admin')
<br><br><br><br>
<div class="container">
    <h2>Assign Roles</h2>
    <form action="{{ route('admin.assign_roles.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="assessment">Select Assessment:</label>
            <select name="assessment" id="assessment" class="form-control">
                @foreach ($assessments as $assessment)
                    <option value="{{ $assessment->id }}">{{ $assessment->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tutor">Select Tutor:</label>
            <select name="tutor" id="tutor" class="form-control">
            </select>
        </div>
        <div class="form-group">
    <label for="role">Select Role:</label>
    <select name="role" id="role" class="form-control">
        <option value="admin">Admin</option>
        <option value="assessor">Assessor</option>
        <option value="internal moderator">Internal Moderator</option>
        <option value="external examiner">External Examiner</option>
        <option value="programme director">Programme Director</option>
        <!-- Add more roles as needed -->
    </select>
</div>

        <button type="submit" class="btn btn-primary">Assign Role</button>
    </form>
</div>
@endsection
