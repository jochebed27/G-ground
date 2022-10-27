<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div class="container">
      <nav class="nav-container">
      <h1>Logo</h1>
        <ul class="nav-links">
           @auth
           
           <a href="#">Courses</a>
           <a href="/logout">Logout</a>     
           @else
           <a href="/" style="color: black">Home</a>
           <a href="#about" style="color: black">About Us</a>
           <a href="#" style="color: black">Contact</a>
           <a href="/blog" style="color: black">Blog</a>
           <a class='login-btn' href="/login">Login</a>    
           <a  class="reg-btn" href="/signUp">Register</a>
           @endauth
        </ul>
      </nav>
      <div class="hero-section">
          <div class="donate-container">
              <h1>Select Donation Amount</h1>
              <div class="donate-btns">
                <button class="donate-amount">₦50,000</button>
                <button class="donate-amount">₦50,000</button>
                <button class="donate-amount">₦50,000</button>
                <button class="donate-amount">₦50,000</button>
              </div>
              <div class="enroll-container">
                  <h1>will support enrollment of both genders</h1>
              </div>
              <p>We have volunteers that are ready to work day and night to see the sustainable of the project</p>
              <button class="donate-button">DONATE NOW</button>
          </div>
      </div>
      <div class="middle-section">
          <h1 class="header">Technology is now and the Future!!</h1>
          <div class="stat-container">
              <div class="stat-card">
                <h1>14% reduction in child marriage</h1>
              </div>
          </div>
      </div>
    </div>

  </div>
</body>
</html>