@extends('admin.admin_dashboard')

@section('admin')
    <h1>Edit Module</h1>
    
    <form action="{{ route('admin.update_modules', ['module' => $module->module_code]) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="module_code">Module Code:</label>
        <input type="text" name="module_code" id="module_code" value="{{ $module->module_code }}" required>

        <label for="module_title">Module Title:</label>
        <input type="text" name="module_title" id="module_title" value="{{ $module->module_title }}" required>

        <label for="module_lead">Module Lead:</label>
        <input type="text" name="module_lead" id="module_lead" value="{{ $module->module_lead }}" required>

        <label for="level">Level:</label>
        <input type="number" name="level" id="level" value="{{ $module->level }}" required>

        <label for="credits">Credits:</label>
        <input type="number" name="credits" id="credits" value="{{ $module->credits }}" required>

        <button type="submit">Update Module</button>
    </form>
@endsection
