
<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="style/contactus.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

	<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">
                <img src="images/logo2.png" width="50" height="50" class="d-inline-block align-top" alt="">
            </a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

					<li class="nav-item">
					<img src="images/logo2.png" width="50" height="50" class="d-inline-block align-top" alt="">
                      </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('index')}}">BM-Clinic</a>
                      </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutUs')}} " >About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactUs')}}">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    
                </form>
            </div>
        </div>
    </nav>
	
</head>
<body>

<form action="{{route('contact_post')}}" method="POST">
    @csrf
	<div class="container">
		<div class="contact-box">
			<div class="left">
                <img class="imag" src="images/cu2.jpg" alt="">
            </div>

			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" name="name" class="field" placeholder="Your Name" required="required" data-error="Name is required.">
				<input type="email" name="email" class="field" placeholder="Your Email" required="required" data-error="Email is required.">
				<textarea placeholder="Message" name="message" class="field" required="required" data-error="Message is required."></textarea>
				
                <button type="submit" class="btn">Send</button>
			</div>
		</div>
	</div>
</form>

<center>
	<div class="social-media mt-5 fs-1"  id="social">
		<a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram" style="font-size: 40px"></i></a>
		<a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-square" id="facebook" style="font-size: 40px"></i></a>
		<a href="mailto:31830246@students.liu.edu.lb" target="_blank"><i class="fa-brands fa-google" style="font-size: 40px"></i></a>
	</div>        
</center>
     <!--  -->
		 
	
	
</body>

</html>
