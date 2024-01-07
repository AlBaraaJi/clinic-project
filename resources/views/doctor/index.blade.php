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

    {{-- <div class="alert alert-primary" role="alert"> --}}
      </div>
</head>
<body >

<br><br><br>
<div class="container">
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4 mb-5">
  <div class="col">
    <div class="card" >
      <img src="images/clinicimage.jpg" class="card-img-top"
        alt="Hollywood Sign on The Hill" />
      <div class="card-body">
        <h5 class="card-title text-primary">View Appointment</h5>
        <p class="card-text">
          To view all appointment with Patients. Click on <b>(View)</b> button.
        </p>
        <br>
          <a  href="{{route('view_app')}}" class="btn btn-primary">View</a>

      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="images/appointmentimage.jpg" class="card-img-top"
        alt="Palm Springs Road" />
      <div class="card-body">
        <h5 class="card-title text-primary">View Patient History</h5>
        <p class="card-text">
        To view patients' history
        </p>
        <br>
          <a href="{{route('view_history')}}" class="btn btn-primary">Click</a>
      </div>
    </div>
  </div>
</div>


</div>




</body>>
@endsection
