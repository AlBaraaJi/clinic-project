@extends('doctor.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>


<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>



  </div>
</head>
<body>


<center>
    <br>
    <label> <div class="alert alert-primary" role="alert"> <h3>Patient History</h3></div></label>
<br><br>
</center>

    <div class="container">
        <table style="width:100%" class="table table-hover" id="myTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Phone</th>
                    <th>Time</th>   
                    <th>Date</th>
                    <th>Report</th>
                    <th>Email</th>
                </tr>
            </thead>
        <tbody>
</tbody>
</table>
</div>



</body>

<script>
  $(document).ready(function() {
  $('#myTable').DataTable({
    "paging": true,
    "searching": true,
    "ordering": true,
    "info": true
  });
});
</script>

</html>
@endsection
