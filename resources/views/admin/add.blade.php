@extends('admin.layout')

@section('content')

<div style="margin-left:340px" class="w-75">
    @if($errors->any())
    @foreach ($errors->all() as $error)
        <span style="color: red">{{$error}}</span>
    @endforeach
    @endif
    <form method="POST" action="{{ route('doctors.store') }}">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="startTime">Start time</label>
        <input type="time" name="start_time" id="stime" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="endTime">End Time</label>
        <input type="time" name="end_time" id="etime" class="form-control" required>
    </div>

    <div class="form-group mt-3">
        <h5>Role</h5>
        <select name="role" class="form-select" aria-label="Default select example">
            <option selected>Select user role</option>
            <option value="doctor">doctor</option>
            <option value="scientest">scientest</option>
            <option value="user">user</option>
          </select>
    </div>


    <div class="form-group mt-3">
        <h5>Gender</h5>
        <div class="form-check mt-3">
            <input class="form-check-input" type="radio" name="gender" value="male" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
              Male
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gender" value="female" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Female
            </label>
          </div>
    </div>




    <button type="submit" class="btn btn-primary mt-3">Add Doctor</button>
</form>
</div>
@endsection
