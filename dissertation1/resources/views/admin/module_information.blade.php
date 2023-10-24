@extends('admin.admin_dashboard')
@section('admin')

<div class="container">
    <h2>Module Information</h2>

    <br><br>
    <table class="table table-bordered">
        <tr>

        </tr>
        <form action="{{ route('admin.module_information.update', ['projectId' => $projectId]) }}" method="POST">

            @csrf
            @method('PUT')

            <tr>
            <td><label for="module_code">Module Code:</label></td>
                <td><input type="text" id="module_code" name="module_code" value="{{ $module->module_code }}" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="module_title">Module Title:</label></td>
                <td><input type="text" id="module_title" name="module_title" value="{{ $module->module_title }}" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="module_lead">Module Leader:</label></td>
                <td><input type="text" id="module_lead" name="module_lead" value="{{ $module->module_lead }}" required class="form-control"></td>
            </tr>
            <tr>
    <td><label for="level">Level:</label></td>
    <td>
        <select id="level" name="level" required class="form-control">
            @for ($i = 1; $i <= 8; $i++)
                <option value="{{ $i }}" {{ $module->level == $i ? 'selected' : '' }}>Level {{ $i }}</option>
            @endfor
        </select>
    </td>
</tr>

<tr>
    <td><label for="credits">Credits:</label></td>
    <td>
        <select id="credits" name="credits" required class="form-control">
            @for ($i = 10; $i <= 50; $i += 5)
                <option value="{{ $i }}" {{ $module->credits == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
    </td>
</tr>

            <tr>
                <td><label for="mlo_code">MLO:</label></td>
                <td>
                    <select id="mlo" name="mlo" class="form-control">
                        <option value="">Select MLO</option>
                        @foreach ($mloData as $mlo)
                        <option value="{{ $mlo->module_code }} - {{ $mlo->mlo_number }} - {{ $mlo->mlo_description }}">{{ $mlo->module_code }} - {{ $mlo->mlo_number }} - {{ $mlo->mlo_description }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="mlo_code">MLO:</label></td>
                <td>
                    <select id="mlo" name="mlo" class="form-control">
                        <option value="">Select MLO</option>
                        @foreach ($mloData as $mlo)
                        <option value="{{ $mlo->module_code }} - {{ $mlo->mlo_number }} - {{ $mlo->mlo_description }}">{{ $mlo->module_code }} - {{ $mlo->mlo_number }} - {{ $mlo->mlo_description }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="mlo_code">MLO:</label></td>
                <td>
                    <select id="mlo" name="mlo" class="form-control">
                        <option value="">Select MLO</option>
                        @foreach ($mloData as $mlo)
                        <option value="{{ $mlo->module_code }} - {{ $mlo->mlo_number }} - {{ $mlo->mlo_description }}">{{ $mlo->module_code }} - {{ $mlo->mlo_number }} - {{ $mlo->mlo_description }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </td>
            </tr>
        </form>
    </table>
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
