@extends('admin.admin_dashboard')
@section('admin')
<br><br><br>
<div class="tutors-container">
    <h1>Tutors</h1>
    <br><br><br>
    <table class="tutors-table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Surname</th>
                <th>First Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tutors as $tutor)
            <tr>
                <td>{{ $tutor->username }}</td>
                <td>{{ $tutor->surname }}</td>
                <td>{{ $tutor->firstname }}</td>
                <td>{{ $tutor->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<style>
    .tutors-container {
        margin: 20px;
    }

    .tutors-table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #ddd;
    }

    .tutors-table th,
    .tutors-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }


</style>
@endsection
