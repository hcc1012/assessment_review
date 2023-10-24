@extends('admin.admin_dashboard')
@section('admin')
<div class="container">
    <br><br><br><br><br><br><br><br>
    <h1>Upload CSV</h1>
    <form action="{{ route('admin.module_csv') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="data_type">Select Data Type:</label>
            <select class="form-control" name="data_type" id="data_type">
                <option value="modules">Modules</option>
            </select>
        </div>
        <div class="form-group">
            <label for="csv_file">Choose CSV File:</label>
            <input type="file" class="form-control-file" name="csv_file" id="csv_file">
        </div>
        <button type="submit" class="btn btn-primary">Upload CSV</button>
    </form>
</div>
<br><br><br><br><br>

<style>
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
    }
</style>

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
