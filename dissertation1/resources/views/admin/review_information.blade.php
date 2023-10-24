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
            <tr>
                <td>int_reviewa1</td>
                <td>yes</td>
                <td>a1</td>
            </tr>
            <tr>
                <td>int_reviewa2</td>
                <td>no</td>
                <td>a2</td>
            </tr>
            <tr>
                <td>int_reviewa3</td>
                <td>yes</td>
                <td>a3</td>
            </tr> <tr>
                <td>int_reviewa4</td>
                <td>no</td>
                <td>a4</td>
            </tr> <tr>
                <td>int_reviewa5</td>
                <td>no</td>
                <td>a5</td>
            </tr> <tr>
                <td>int_reviewa6</td>
                <td>yes</td>
                <td>a6</td>
                </tr> <tr>
                <td>int_reviewa7</td>
                <td>no</td>
                <td>a7</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>yes</td>
                <td>a8</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>no</td>
                <td>b1_1</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>yes</td>
                <td>b1_2</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>yes</td>
                <td>b1_3</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>no</td>
                <td>b2</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>yes</td>
                <td>b3_1</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>yes</td>
                <td>b3_2</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>no</td>
                <td>c_1</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>yes</td>
                <td>c_2</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>no</td>
                <td>c_3</td>
                </tr> <tr>
                <td>int_reviewa8</td>
                <td>yes</td>
                <td>c_4</td>
                </tr> <tr>
        </tbody>
    </table>
<br><br><br>
<table class="table table-bordered">
        <h4>General Comments</h4>
        <tbody>
            <tr>
                <td>int_moderator_response</td>
                <td>Int_moderator</td>
                <td>int_moderator_date</td>
            </tr>
            <tr>
                <td>intcomment1</td>
                <td>wongh</td>
                <td>08/11/2022</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <h4>Assessor Response and Dates</h4>
        <tbody>
            <tr>
                <td>assessor_response</td>
                <td>Assessor</td>
                <td>assessor_date</td>
            </tr>
            <tr>
                <td>intcomment1</td>
                <td>jyuen</td>
                <td>10/11/2022</td>
            </tr>
        </tbody>
    </table>

    <!-- Director Confirmation and Dates -->
    <table class="table table-bordered">
        <h4>Director Confirmation and Dates</h4>
        <tbody>
            <tr>
                <td>director_response</td>
                <td>Programme Director</td>
                <td>int_assessor_date</td>
            </tr>
            <tr>
                <td>dircomment1</td>
                <td>wongs</td>
                <td>12/11/2022</td>
            </tr>
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
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ext_review1</td>
                <td>yes</td>
                <td>ext1</td>
            </tr>
            <tr>
                <td>ext_review2</td>
                <td>no</td>
                <td>ext2</td>
            </tr>
            <tr>
                <td>ext_review3</td>
                <td>yes</td>
                <td>ext3</td>
            </tr>
            <tr>
                <td>ext_review4</td>
                <td>no</td>
                <td>ext4</td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <table class="table table-bordered">
        <h4>Assessor Response and Dates</h4>
        <tbody>
            <tr>
                <td>assessor_response</td>
                <td>Assessor</td>
                <td>assessor_date</td>
            </tr>
            <tr>
                <td>intcomment1</td>
                <td>jyuen</td>
                <td>10/12/2022</td>
            </tr>
        </tbody>
    </table>

    <!-- Director Confirmation and Dates -->
    <table class="table table-bordered">
        <h4>Director Confirmation and Dates</h4>
        <tbody>
            <tr>
                <td>director_response</td>
                <td>Programme Director</td>
                <td>int_assessor_date</td>
            </tr>
            <tr>
                <td>dircomment1</td>
                <td>wongs</td>
                <td>12/12/2022</td>
            </tr>
        </tbody>
    </table>

@endsection
