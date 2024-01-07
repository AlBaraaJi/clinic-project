
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>log in</title>
    <link rel="stylesheet" href="style/login2.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script> -->
	
    <section class="top">
    <a href="home.php">
    <img  src="images/logo2.png" alt="">
    </a>
    <a href="home.php">
    <h3 style="color:white">BM-Clinic</h3>
    </a>
</section>
  </head>
  <body>
    
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="{{route('sign-in')}}">
        @csrf
      <section class="one">
        <div class="txtp">
        
          <input type="email" name="email" placeholder="Email" required>
      
        </div>
        <div class="txtp">
          <input type="password" name="password" placeholder="Password" required>
        </div>
        </section>  
        <section class="submit">
        <input  type="submit" value="Login">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li style="color: red"><strong>{{$error}}</strong></li>
            @endforeach
        @endif
        </section>
        
        <section class="two">
        <div class="signup_link">
          Not a member? <a href="{{route('register')}}">Signup</a>
        </div>
        </section>
      </form>
    </div>
    
  </body>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js" integrity="sha512-uE2UhqPZkcKyOjeXjPCmYsW9Sudy5Vbv0XwAVnKBamQeasAVAmH6HR9j5Qpy6Itk1cxk+ypFRPeAZwNnEwNuzQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
