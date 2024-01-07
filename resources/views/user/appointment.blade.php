@extends('user.layout')

@section('content')
<link rel="stylesheet" href="css/app2.css"/>
<body>

<div class="container">
        <div class=" text-center mt-5 ">

        <label><div class="alert alert-warning" role="alert"><h3 >Confirm Your Appointment</h3></div></label>


        </div>


    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">

            <div class = "container">
                             <form method="post" action="appaction.php" id="contact-form" role="form">



            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Full Name *</label>
                            <input value="{{Auth::user()->name}}" id="form_name" type="text" name="first_name" class="form-control"  required="required" data-error="Firstname is required." >
                        </div>
                    </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Time</label>
                            <select name="appointment_time" class="form-control">
                                @php
                                    $start = \Carbon\Carbon::createFromFormat('H:i', $startTime);
                                    $end = \Carbon\Carbon::createFromFormat('H:i', $endTime);
                                    $interval = \Carbon\CarbonInterval::hour();

                                    $times = collect();
                                    $time = $start->copy();
                                    while ($time->lt($end)) {
                                        $times->push($time->format('H:i'));
                                        $time->add($interval);
                                    }
                                @endphp

                                @foreach ($times as $time)
                                    <option value="{{ $time }}">{{ $time }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="Customization">Date</label>
                        <div class="md-form md-outline input-with-post-icon datepicker" id="customDays">
                        <input placeholder="Select date" type="date" min="{{ now()->addDay()->toDateString() }}" id="Customization" name="appdate" class="form-control" required="required" data-error="Please chosse the Date.">
                        <i class="fas fa-calendar input-prefix" tabindex=0></i>
                        </div>

                      </div>
                    </div>
                </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-5">
                        <input class="btn btn-primary"   type="submit" value="Submit">
                    </div>
                </div>

        </div>
         </form>
        </div>
    </div>
    </div>
    </div>

</div>
</div>

</body>
@endsection
