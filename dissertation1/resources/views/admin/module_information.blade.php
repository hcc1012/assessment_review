@extends('admin.admin_dashboard')
@section('admin')

    <div class="container">
        <h2>Module Information</h2>
        

        <br><br>
        <form action="{{ route('admin.module_information.update', ['module' => $module]) }}" method="POST">


            @csrf
            @method('PUT') 

            <div class="form-group">
                <label for="module_code">Module Code:</label>
                <input type="text" id="module_code" name="module_code" value="{{ $module->module_code }}" required>
            </div>
            <div class="form-group">
                <label for="module_title">Module Title:</label>
                <input type="text" id="module_title" name="module_title" value="{{ $module->module_title }}" required>
            </div>
            <div class="form-group">
                <label for="module_lead">Module Leader:</label>
                <input type="text" id="module_lead" name="module_lead" value="{{ $module->module_lead }}" required>
            </div>
            <div class="form-group">
                <label for="level">Level:</label>
                <select id="level" name="level" required>
                    <!-- Populate and select the appropriate option based on $module->level -->
                    <option value="1" {{ $module->level == 1 ? 'selected' : '' }}>Level 1</option>
                    <option value="2" {{ $module->level == 2 ? 'selected' : '' }}>Level 2</option>
                    <option value="3" {{ $module->level == 3 ? 'selected' : '' }}>Level 3</option>
                    <option value="4" {{ $module->level == 4 ? 'selected' : '' }}>Level 4</option>
                    <option value="5" {{ $module->level == 5 ? 'selected' : '' }}>Level 5</option>
                    <option value="6" {{ $module->level == 6 ? 'selected' : '' }}>Level 6</option>
                    <!-- Add options for other levels -->
                </select>
            </div>
            <div class="form-group">
    <label for="credits">Credits:</label>
    <select id="credit" name="credits" required>
        <option value="10" {{ $module->credits == 10 ? 'selected' : '' }}>10</option>
        <option value="20" {{ $module->credits == 20 ? 'selected' : '' }}>20</option>
        <option value="30" {{ $module->credits == 30 ? 'selected' : '' }}>30</option>
        <option value="40" {{ $module->credits == 40 ? 'selected' : '' }}>40</option>
        <option value="50" {{ $module->credits == 50 ? 'selected' : '' }}>50</option>
        <option value="60" {{ $module->credits == 60 ? 'selected' : '' }}>60</option>
    </select>
</div>


            <!-- Include MLO fields and KSB fields here as you did before -->

            <button type="submit">Submit</button>
        </form>
    </div>



@endsection
