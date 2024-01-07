<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style/signup3.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <a href="home.php">
<section class="klk">
  <img class="logo" src="images/logo2.png" alt="">
  <h2>BM-Clinic</h2>
</section>
</a>
   </head>
<body>

  <div class="container" style="height: 600px">
    <div class="title">Create Account</div>
    <div class="content">

      <form method="POST" action="{{route('sign-up')}}">
        @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" name="first_name" placeholder="Enter your First Name" required>
          </div>

          <div class="input-box">
            <span class="details">Last Name</span>
            <input type="text" name="last_name" placeholder="Enter your Last Name" required>
          </div>


          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required>
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="number" name="phone" placeholder="Enter your number" required>
          </div>

          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="password_confirmation" placeholder="Repeat your password" required>
          </div>

        </div>

        <section>
        <div class="gender-details">
          <span class="gender-title">Gender</span>
          <br><br>
          <input type="radio" name="gender" value="male" id="dot-1">
          <input type="radio" name="gender" value="female" id="dot-2">

          <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
            </label>

            <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Female</span>
            </label>
          </div>
        </div>

        </section>

        <div class="button">
          <button type="submit">Sign up</button>
        </div>

        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li style="color: red"><strong>{{$error}}</strong></li>
        @endforeach
    @endif
      </form>
    </div>
  </div>

</body>
</html>
