@extends('admin.layout')

@section('content')
<div style="margin-left:340px" class="w-75">
    <form method="POST" action="{{ route('doctors.store') }}">
        @csrf
        @if($errors->any())
            @dd($errors)
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" required>
        </div>
    
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" >
        </div>
    
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone" class="form-control" value="{{$user->phone}}" required>
        </div>
    
        <div class="form-group mt-3">
            <h5>Role</h5>
            <select name="role" class="form-select" aria-label="Default select example">
                {{-- <option >Select user role</option> --}}
                <option value="doctor" {{ $user->role === 'doctor' ? 'selected' : '' }}>doctor</option>
                <option value="scientest" {{ $user->role === 'scientest' ? 'selected' : '' }}>scientest</option>
                <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>user</option>
              </select>
        </div>
    
        <button type="submit" class="btn btn-primary mt-3">Submit</button>

    </form>
    </div>
@endsection