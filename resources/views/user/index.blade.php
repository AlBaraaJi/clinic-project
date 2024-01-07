@extends('user.layout')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>


  {{-- <div class="container mt-3 mb-5 justify-content-center">
        <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true" >
            <div class="toast-header" style="display: inline-block;">
            <img src="images/logo2.png" style="width:50px;" class="rounded me-2" alt="...">
                <p style="font-weight: bold;">Clinic System</p>
            </div>
            <button type="button" class="btn-close float-end " data-bs-dismiss="toast"
                style="margin-right: 5px;margin-top:5px"></button>
            <hr>
            <div class="toast-body">
               <b></b>

            </div>
        </div>
    </div>
</div> --}}



</head>
<br><br><br>
<body >
  <div class="container">
<div class="row  g-4 mb-5">
  {{-- <div class="col">
    <div class="card" >
      <img src="images/clinicimage.jpg" class="card-img-top"
        alt="Hollywood Sign on The Hill" />
      <div class="card-body">
        <h5 class="card-title text-primary">View Doctors</h5>
        <p class="card-text">
          To view all doctors in BM-Clinic System and to get more information about him. Click on <b>(View)</b> button.
        </p>
        <br>
          <a href="viewdoctors.php" class="btn btn-primary">View</a>
      </div>
    </div>
  </div> --}}
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card" >
      <img src="images/appointmentimage.jpg" class="card-img-top"
        alt="Palm Springs Road" height="300px"/>
      <div class="card-body">
        <h5 class="card-title text-primary">Take Appointment</h5>
        <p class="card-text">
          To make an appointment with a specific doctor at specific time. (Note: Reservations are not possible at a time taken in advance)
        </p>
        <br>
          <a href="{{route('selectDoctor')}}" class="btn btn-primary">Click</a>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="card">
      <img src="images/labimage.jpg" class="card-img-top"
        alt="Los Angeles Skyscrapers" height="300px"/>
      <div class="card-body">
        <h5 class="card-title text-primary">Laboratory</h5>
        <p class="card-text">To make an appointment at the laboratory with a specific doctor at specific time. (Note: Reservations are not possible at a time taken in advance)</p>
          <br>
          <a href="{{route('lab_appointment')}}" class="btn btn-primary">Click</a>
      </div>
    </div>
  </div>
</div>





</div>

</body>
@endsection
