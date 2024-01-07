<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel=" stylesheet">
	<!--Replace with your tailwind.css once created-->
	<!--Regular Datatables CSS-->
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/table.css')}}">
</head>
<body>
<div class="w3-sidebar w3 w3-bar-block bg-dark text-primary " style="width:22%;font-size:18px;padding:10px">
        <h3 class="w3-bar-item" style="margin-bottom: 20px;font-weight: bold;font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Menu</h3>
        <hr style="background-color: black;">
        <a href="{{route ('admin')}}" class="w3-bar-item w3-button"><i class="fa-sharp fa-solid fa-users" style="margin-right:8px;margin-bottom:35px;margin-top:30px"></i>View Users</a>
        {{-- <a href="{{route('request')}}" class="w3-bar-item w3-button"><i class="fa-sharp fa-solid fa-users" style="margin-right:8px;margin-bottom:35px;margin-top:30px"></i>Requests</a> --}}
        {{-- <a href="{{route('edit')}}" class="w3-bar-item w3-button"><i class="fa-sharp fa-solid fa-users" style="margin-right:8px;margin-bottom:35px;"></i> Edit Doctors</a> --}}
        <a href="{{route('add_doctors')}}" class="w3-bar-item w3-button"><i class="fa fa-plus-circle" aria-hidden="true" style="margin-right: 2px;margin-bottom:35px"></i> Add Doctors</a>
        <a href="{{route('feedback')}}" class="w3-bar-item w3-button"><i class="fa-sharp fa-solid fa-users" style="margin-right:8px;margin-bottom:35px;"></i>Doctors work</a>
        <a href="{{route('messages')}}" class="w3-bar-item w3-button"><i class="fa-sharp fa-solid fa-users" style="margin-right:8px;margin-bottom:35px;"></i>View Masseges</a>
    </div>
    <nav class="navbar navbar-expand-lg bg-light" style="margin-left:335px ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/logo2.png" width="50" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BM-Clinic</a>
                      </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutUs')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactUs')}}">Contact Us</a>
                    </li>
                </ul>
                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </div>
        </div>
    </nav>

    <section>
        <div class="container ">
            @yield('content')
        </div>
    </section>
</body>
</html>
