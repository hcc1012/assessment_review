@extends('admin.admin_dashboard')
@section('admin')

<div class="container">
    <h2>Assessment Information</h2>
    
    <br><br>
    <form action="{{ route('admin.submit_assessment.submit', ['assessment' => $assessment]) }}" method="POST">


        @csrf
        @method('PUT') 

        <div class="form-group">
            <label for="assessment_type">Assessment Type:</label>
            <select id="assessment_type" name="assessment_type" required>
                <option value="quiz" {{ $assessment->assessment_type == 'quiz' ? 'selected' : '' }}>Quiz</option>
                <option value="exam" {{ $assessment->assessment_type == 'exam' ? 'selected' : '' }}>Exam</option>
                <option value="group assessment" {{ $assessment->assessment_type == 'group assessment' ? 'selected' : '' }}>Group Assessment</option>
                <option value="individual assessment" {{ $assessment->assessment_type == 'individual assessment' ? 'selected' : '' }}>Individual Assessment</option>
            </select>
        </div>
        <div class="form-group">
            <label for="weighting">Weighting:</label>
            <input type="number" id="weighting" name="weighting" value="{{ $assessment->weighting }}" required>
        </div>
        <div class="form-group">
            <label for="assessment_deliverable">Assessment Deliverable:</label>
            <select id="assessment_deliverable" name="assessment_deliverable" required>
                <option value="presentation" {{ $assessment->assessment_deliverable == 'presentation' ? 'selected' : '' }}>Presentation</option>
                <option value="coding assignment" {{ $assessment->assessment_deliverable == 'coding assignment' ? 'selected' : '' }}>Coding Assignment</option>
                <option value="essay" {{ $assessment->assessment_deliverable == 'essay' ? 'selected' : '' }}>Essay</option>
            </select>
        </div>
        <div class="form-group">
            <label for="other_deliverables">Other Deliverables:</label>
            <input type="text" id="other_deliverables" name="other_deliverables" value="{{ $assessment->other_deliverables }}">
        </div>
        <div class="form-group">
            <label for="issue_date">Issue Date:</label>
            <input type="date" id="issue_date" name="issue_date" value="{{ $assessment->issue_date }}" required>
        </div>
        <div class="form-group">
            <label for="submission_date">Submission Date:</label>
            <input type="date" id="submission_date" name="submission_date" value="{{ $assessment->submission_date }}" required>
        </div>
        <div class="form-group">
            <label for="date_submitted_for_moderation">Date Submitted for Moderation:</label>
            <input type="date" id="date_submitted_for_moderation" name="date_submitted_for_moderation" value="{{ $assessment->date_submitted_for_moderation }}">
        </div>
        <div class="form-group">
            <label for="date_moderated">Date Moderated:</label>
            <input type="date" id="date_moderated" name="date_moderated" value="{{ $assessment->date_moderated }}">
        </div>
        <div class="form-group">
            <label for="date_form_received">Date Form Received:</label>
            <input type="date" id="date_form_received" name="date_form_received" value="{{ $assessment->date_form_received }}">
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

@endsection
