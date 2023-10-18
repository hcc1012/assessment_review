@extends('admin.admin_dashboard')
@section('admin')
<br><br>

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="module-form-container">
    <h1>Update Module</h1>
    <br>
    <form action="{{ route('admin.update_module', ['id' => $module->id]) }}" method="POST" class="module-form">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="programme_title">Programme Title:</label>
            <input type="text" name="programme_title" id="programme_title" class="form-control" required value="{{ $module->programme_title }}">
            @error('programme_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="module_code">Module Code:</label>
            <input type="text" name="module_code" id="module_code" class="form-control" required value="{{ $module->module_code }}">
            @error('module_code')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="module_title">Module Title:</label>
            <input type="text" name="module_title" id="module_title" class="form-control" required value="{{ $module->module_title }}">
            @error('module_title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="module_lead">Module Lead:</label>
            <input type="text" name="module_lead" id="module_lead" class="form-control" required value="{{ $module->module_lead }}">
            @error('module_lead')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="level">Level:</label>
            <input type="number" name="level" id="level" class="form-control" required value="{{ $module->level }}">
            @error('level')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="credits">Credits:</label>
            <input type="number" name="credits" id="credits" class="form-control" required value="{{ $module->credits }}">
            @error('credits')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<style>
    .module-form-container {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .module-form {
        width: 50%;
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"], input[type="number"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .text-right {
        text-align: right;
    }
</style>
@endsection
