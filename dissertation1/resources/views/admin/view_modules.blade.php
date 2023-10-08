@extends('admin.admin_dashboard')
@section('admin')
<br><br><br>
<div class="modules-container">
    <h1>Modules</h1>
    <br><br><br>
    <table class="modules-table">
        <thead>
            <tr>
                <th>Module Code</th>
                <th>Module Title</th>
                <th>Module Lead</th>
                <th>Level</th>
                <th>Credits</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($modules as $module)
            <tr>
                <td>{{ $module->module_code }}</td>
                <td>{{ $module->module_title }}</td>
                <td>{{ $module->module_lead }}</td>
                <td>{{ $module->level }}</td>
                <td>{{ $module->credits }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<style>
    .modules-container {
        margin: 20px;
    }

    .modules-table {
        width: 100%;
        border-collapse: collapse;
    }

    .modules-table th,
    .modules-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
</style>
@endsection
