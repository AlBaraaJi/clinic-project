
@extends('user.layout')

@section('content')


<div class="col-md-6">
    <div class="form-group">
        <label for="form_need">Doctor</label>
        <select id="form_need" name="apptime" class="form-control" required="required" data-error="Please choose the time.">
            <option  disabled>Select doctor</option>
            @foreach ($doctors as $doctor)
                <option >{{$doctor->name}}</option>
            @endforeach
        </select>
    </div>
        <div class="row">
            <div class="col-md-12 mt-5">
          <a href="{{ route('chooseDoc') }}">
                Submit
            </a>
            </div>
        </div>
@endsection

