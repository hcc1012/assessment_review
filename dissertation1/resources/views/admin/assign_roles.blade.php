@extends('admin.admin_dashboard')

@section('admin')
<br><br><br><br>
<div class="container">
    <h1>Assign Roles</h1>
    <form method="POST" action="{{ route('admin.assign_roles.submit') }}">
        @csrf

        <!-- Select Program -->
        <div class="form-group">
            <label for="programmeID">Select Programme:</label>
            <select name="programmeID" class="form-control" required>
                @foreach ($programmes as $programme)
                    <option value="{{ $programme->id }}">{{ $programme->programme_title }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Module -->
        <div class="form-group">
            <label for="moduleID">Select Module:</label>
            <select name="moduleID" class="form-control" required>
                @foreach ($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->module_title }}</option>
                @endforeach
            </select>
        </div>

        <!-- User Role Assignment (repeat as needed) -->
        <div class="form-group">
            <label for="userID">Select User:</label>
            <select name="userID" class="form-control" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Role (if not pre-determined) -->
        <div class="form-group">
            <label for="roleID">Select Role:</label>
            <select name="roleID" class="form-control" required>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Assign Roles</button>
    </form>
</div>
@endsection
