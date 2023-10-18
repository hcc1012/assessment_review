@extends('admin.admin_dashboard')
@section('admin')

<div class="container">
    <h2>Assessment Information</h2>

    <br><br>
    <form action="{{ route('admin.assessment_information.store') }}" method="POST">
        @csrf

        <table class="table table-bordered">
            <tr>
                <th>Assessment Information</th>
            </tr>
            <tr>
                <td><label for="assessment_type">Assessment Type:</label></td>
                <td>
                    <select id="assessment_type" name="assessment_type" required class="form-control">
                        <option value="quiz">Quiz</option>
                        <option value="exam">Exam</option>
                        <option value="group assessment">Group Assessment</option>
                        <option value="individual assessment">Individual Assessment</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="weighting">Weighting:</label></td>
                <td><input type="number" id="weighting" name="weighting" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="assessment_deliverable">Assessment Deliverable:</label></td>
                <td>
                    <select id="assessment_deliverable" name="assessment_deliverable" required class="form-control">
                        <option value="presentation">Presentation</option>
                        <option value="coding assignment">Coding Assignment</option>
                        <option value="essay">Essay</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="other_deliverables">Other Deliverables:</label></td>
                <td><input type="text" id="other_deliverables" name="other_deliverables" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="issue_date">Issue Date:</label></td>
                <td><input type="date" id="issue_date" name="issue_date" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="submission_date">Submission Date:</label></td>
                <td><input type="date" id="submission_date" name="submission_date" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="date_submitted_for_moderation">Date Submitted for Moderation:</label></td>
                <td><input type="date" id="date_submitted_for_moderation" name="date_submitted_for_moderation" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="date_moderated">Date Moderated:</label></td>
                <td><input type="date" id="date_moderated" name="date_moderated" class="form-control"></td>
            </tr>
            <tr>
                <td><label for="date_form_received">Date Form Received:</label></td>
                <td><input type="date" id="date_form_received" name="date_form_received" class="form-control"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </td>
            </tr>
        </table>
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
