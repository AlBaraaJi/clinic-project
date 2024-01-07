@extends('user.layout')

@section('content')
<link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
<script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/app2.css"/>

<body>

<div class="container">
        <div class=" text-center mt-5 ">
        <label> <div class="alert alert-warning" role="alert"><h3 >Confirm Your Appointment</h3></div></label>
        </div>

    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">

            <div class = "container">
                             <form method="post" action="labaction.php" id="contact-form" role="form">



            <div class="controls">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname</label>
                            <input id="form_name" type="text" name="fname" value="" class="form-control"  required="required" data-error="Firstname is required.">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname</label>
                            <input id="form_lastname" type="text" name="lname" value="" class="form-control"  required="required" data-error="Lastname is required.">
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="form_email">Doctor Name</label>
                            <input id="form_email" type="text" name="drname" value="" class="form-control" required="required" data-error="Valid email is required.">

                        </div>
                    </div>
                    <div class="col-md-6 mt-3">
                        <div class="form-group">
                            <label for="form_need">Time</label>
                            <select id="form_need" name="apptime" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Choose the Time--</option>
                                <option >09:00AM</option>
                                <option >09:30AM</option>
                                <option >10:00AM</option>
                                <option >10:30AM</option>
                                <option >11:00AM</option>
                                <option >11:30AM</option>
                                <option >12:00PM</option>
                                <option >12:30PM</option>
                                <option >13:00PM</option>
                                <option >13:30PM</option>
                                <option >14:00PM</option>
                                <option >14:30PM</option>
                                <option >15:00PM</option>
                                <option >15:30PM</option>
                                <option >16:00PM</option>
                                <option >16:30PM</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">

                <div class="col-md-6 mt-3">
                        <div class="form-group">
                        <label for="Customization">Date</label>
                        <div class="md-form md-outline input-with-post-icon datepicker" id="customDays">
                        <input placeholder="Select date" type="date" id="Customization" name="appdate" class="form-control" required="required" data-error="Please chosse the Date.">
                        <i class="fas fa-calendar input-prefix" tabindex=0></i>
                        </div>

                      </div>
                    </div>


                    <div class="col-md-6 mt-3">
                    <div class="form-group">
                            <label for="form_need">Test Type</label>
                            <select id="form_need" name="apptest" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Choose the Test Type--</option>
                                <option >Blood Count Tests</option>
                                <option >Genetic Testing</option>
                                <option >Kidney Tests</option>
                                <option >Laboratory Tests</option>
                                <option >Prenatal Testing</option>
                                <option >Thyroid Tests</option>
                                <option >Urinalysis</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-5">
                    <input class="btn btn-primary"  type="submit" value="Submit">
                </div>
                </div>
        </div>
         </form>
        </div>
            </div>

    </div>
        <!-- /.8 -->
    </div>
    <!-- /.row-->
</div>
</div>

</body>
@endsection
