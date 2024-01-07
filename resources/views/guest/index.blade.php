
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style2.css">
    <title>HOME</title>
    
    <!-- <link rel="stylesheet" type="text/css" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">

    <script type="text/javascript" src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script> -->
</head>
<body>
    <section class="main">
<nav>
            <a href="#">
                <img class="lg" src="images/logo2.png" alt="">
                
            </a>
<ul>
    <li><a href="{{route('index')}}">Home</a></li>
    <li><a href="{{route('aboutUs')}}">About Us</a></li>
    <li><a href="{{route('contactUs')}}">Contact us</a></li>
    
</ul>
</nav>
<div class="mainheader">
    <h1>BM-CLINIC</h1>
    <p>We have the lowest prices and the best service . This is not a buisness this is a life saving </p>
         <br>
         <table>
           <tr>
   <td><a class="mainbtn" href="{{route('register')}}">Sign Up</a></td> 
   <td><a class="mainbtn" href="{{route('login')}}">Login</a></td> 
    </tr>
    </table>
   
</div>
    </section>
</body>

</html>

