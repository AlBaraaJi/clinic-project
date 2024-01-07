@extends('admin.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <title>Patients' History</title>
</head>
<body>
    <div class="container" style="margin-left: 115px">
  <div class="container">
    <h1>Patients' History</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Message</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->role}}</td>

        </tr>
        @endforeach
        <!-- Add more rows for additional patients -->
      </tbody>
    </table>
  </div>
</body>
</div>
</html>
@endsection
