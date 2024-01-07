@extends('doctor.layout')


@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

</head>
<body>


<center>
    <br>
    <label> <div class="alert alert-primary" role="alert"> <h3>APPOINTMENT</h3></div></label>
<br><br>

<table style="width:80%;" class="table table-hover">
<thead>
<tr>
<th>Id</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Phone</th>
<th>Time</th>
<th>Date</th>
<th></th>
<th></th>
</tr>
</thead>
<tbody>

        <tr>
        <td>id</td>
        <td>fname</td>
        <td>mname</td>
        <td>lname</td>
        <td>phone</td>
        <td>time</td>
        <td>date</td>
        <td> <a class="btn btn-primary" role="button" style="text-decoration:none" href="patient_history.php?id=">Confirm</a> </td>
        <td><a class="btn btn-primary" role="button" style="text-decoration:none" >Delete</a></td>
        </tr>
        
</tbody>
</table>

</center>



</body>


@endsection
