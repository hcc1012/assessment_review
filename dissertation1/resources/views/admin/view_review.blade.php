@extends('admin.admin_dashboard')
@section('admin')
<br><br><br><br>
<div class="container">
    <h2>Review Information</h2>
    <br>
    <!-- Internal Review Table -->
    <table class="table table-bordered">
        <h3>Internal Review</h3>
        <thead>
            <tr>
                <th>Descriptor</th>
                <th>Yes/No</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($internalReviewData as $data)
            <tr>
                <td>{{ $data['descriptor'] }}</td>
                <td>{{ $data['yes_no'] }}</td>
                <td>{{ $data['comment'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
    <!-- General Comments and Dates -->
    <table class="table table-bordered">
        <h4>General Comments</h4>
        <tbody>
            @foreach ($generalComments as $comment)
            <tr>
                <td>{{ $comment['comment'] }}</td>
                <td>{{ $comment['user'] }}</td>
                <td>{{ $comment['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <table class="table table-bordered">
        <h4>Assessor Response and Dates</h4>
        <tbody>
            @foreach ($assessorResponses as $response)
            <tr>
                <td>{{ $response['response'] }}</td>
                <td>{{ $response['user'] }}</td>
                <td>{{ $response['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Director Confirmation and Dates -->
    <table class="table table-bordered">
        <h4>Director Confirmation and Dates</h4>
        <tbody>
            @foreach ($directorConfirmations as $confirmation)
            <tr>
                <td>{{ $confirmation['confirmation'] }}</td>
                <td>{{ $confirmation['user'] }}</td>
                <td>{{ $confirmation['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br><br><br>
</div>
    <!-- External Review Table -->
    <table class="table table-bordered">
        <h3>External Review</h3>
        <br>
        <thead>
            <tr>
                <th>Descriptor</th>
                <th>Yes/No</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($externalReviewData as $data)
            <tr>
                <td>{{ $data['descriptor'] }}</td>
                <td>{{ $data['yes_no'] }}</td>
                <td>{{ $data['comment'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
    <table class="table table-bordered">
        <h4>Assessor Response and Dates</h4>
        <tbody>
            @foreach ($extAssessorResponses as $response)
            <tr>
                <td>{{ $response['response'] }}</td>
                <td>{{ $response['user'] }}</td>
                <td>{{ $response['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Director Confirmation and Dates -->
    <table class="table table-bordered">
        <h4>Director Confirmation and Dates</h4>
        <tbody>
            @foreach ($extDirectorConfirmations as $confirmation)
            <tr>
                <td>{{ $confirmation['confirmation'] }}</td>
                <td>{{ $confirmation['user'] }}</td>
                <td>{{ $confirmation['date'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
