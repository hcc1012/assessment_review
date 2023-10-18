@extends('admin.admin_dashboard')
@section('admin')
    <br><br><br>

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
    <div class="modules-container">
        <h1>Modules</h1>
        <br><br><br>
        <table class="modules-table">
            <thead>
            <tr>
                <th>Programme Title</th>
                <th>Module Code</th>
                <th>Module Title</th>
                <th>Module Lead</th>
                <th>Level</th>
                <th>Credits</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($module as $module)
                <tr>
                    <td>{{ $module->programme_title }}</td>
                    <td>{{ $module->module_code }}</td>
                    <td>{{ $module->module_title }}</td>
                    <td>{{ $module->module_lead }}</td>
                    <td>{{ $module->level }}</td>
                    <td>{{ $module->credits }}</td>
                    <td>
                        <a href="{{ route('admin.edit_modules', ['id' => $module->id]) }}"
                           class="btn btn-primary action-button">Edit</a>
                        <button type="button" class="btn btn-danger action-button" onclick="confirmDelete('{{ $module->id }}')">Delete</button>
                        <form id="delete-form-{{ $module->id }}"
                              action="{{ route('admin.delete_modules', ['id' => $module->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
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
            text-align: center;
        }

        .action-button {
            padding: 6px 8px;
            width: 55px;
        }

    </style>

    <script>
        function confirmDelete(moduleId) {
            if (confirm('Are you sure you want to delete this module?')) {
                document.getElementById(`delete-form-${moduleId}`).submit();
            }
        }
    </script>
@endsection
