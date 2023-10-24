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
    <h1>Create Module</h1>
    <br>
    <form action="{{ route('admin.store_modules') }}" method="POST" class="module-form">
        @csrf
        @foreach ($dataTypes as $dataType)
            <div class="form-group">
                <label for="{{ $dataType }}">{{ $dataType }}:</label>
                <input type="text" name="{{ $dataType }}" id="{{ $dataType }}" class="form-control" required>
                @error($dataType)
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        @endforeach
        <div class="form-group text-right"> <!-- Added the text-right class -->
            <button type="submit" class="btn btn-primary">Submit</button>
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

    input[type="text"] {
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
