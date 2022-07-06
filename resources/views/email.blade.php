<!DOCTYPE html>
<html>
<head>
    <title>Housekeeping Feedback Form</title>
    <style>
        table, td, th {
            border: 1px solid;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<h1>Customer Feedback Message </h1>
<p> Name: {{ $name }}</p>
<p> Organization: {{ $organization }}</p>
<p> Email: {{ $email }}</p>
<p> Mobile: {{ $mobile }}</p>
<br>
<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th></th>
        <th>Excellent</th>
        <th>Good</th>
        <th>Fair</th>
        <th>Poor</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Supervisor’s management and assistance:</td>
        <td>@if($supervisor == "Excellent") Excellent @endif</td>
        <td>@if($supervisor == "Good") Good @endif</td>
        <td>@if($supervisor == "Fair") Fair @endif</td>
        <td>@if($supervisor == "Poor") Poor @endif</td>
    </tr>
    <tr>
        <td>Staff’s professionalism and aptitude:</td>
        <td>@if($staff == "Excellent") Excellent @endif</td>
        <td>@if($staff == "Good") Good @endif</td>
        <td>@if($staff == "Fair") Fair @endif</td>
        <td>@if($staff == "Poor") Poor @endif</td>
    </tr>
    <tr>
        <td>Neatness & Clearance Area:</td>
        <td>@if($neatness == "Excellent") Excellent @endif</td>
        <td>@if($neatness == "Good") Good @endif</td>
        <td>@if($neatness == "Fair") Fair @endif</td>
        <td>@if($neatness == "Poor") Poor @endif</td>
    </tr>
    <tr>
        <td>How will you rate our overall quality of our Cleaning Service?</td>
        <td>@if($rate == "Excellent") Excellent @endif</td>
        <td>@if($rate == "Good") Good @endif</td>
        <td>@if($rate == "Fair") Fair @endif</td>
        <td>@if($rate == "Poor") Poor @endif</td>
    </tr>

    </tbody>
</table>
<br>
<p> Feedback: {{ $feedback }}</p>
<p>Thank you</p>
</body>
</html>
