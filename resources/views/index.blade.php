<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Anybody&family=Cinzel&family=Courgette&family=Koulen&family=Montserrat:wght@400;500&family=Poppins&display=swap')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
      <nav class="nav-container">
        <h1><a href="/" style="text-decoration: none">Logo</a></h1>
        <ul class="nav-links">
           @auth
           <a href="/" style="color: black">Home</a>
           <a href="#about" style="color: black">About Us</a>
           <a href="#" style="color: black">Contact</a>
           
           
           {{-- <select>
            <option value="Courses">Courses</option>
           </select> --}}
           <a href="/logout">Logout</a>     
           @else
           <a href="/" class="link" style="color: black">Home</a>
           <a href="/about" class="link" style="color: black">About Us</a>
           <a href="#" class="link" style="color: black">Contact</a>
           <a href="/blog" class="link" style="color: black">Blog</a>
           <a class='login-btn'  href="/login">Login</a>    
           <a  class="reg-btn" href="/signUp">Register</a>
           @endauth
        </ul>
      </nav>
      <div class="hero-section">
          <div class="donate-container">
              <h1>Select Donation Amount</h1>
              <div class="donate-btns">
                <button class="donate-amount">₦1,000</button>
                <button class="donate-amount">₦20,000</button>
                <button class="donate-amount">₦30,000</button>
                <button class="donate-amount">₦50,000</button>
              </div>
              <div class="enroll-container">
                  <h1>will support enrollment of both genders</h1>
              </div>
              <p>We have volunteers that are ready to work day and night to see the sustainable of the project</p>
             <a href="/donate"> <button class="donate-button">DONATE NOW</button></a>
          </div>
      </div>
      <div class="middle-section">
          <h1 class="header">Technology is now and the Future!!</h1>
        <main class="stat-main-container"> 
          <div class="stat-container-left">
              <div class="stat-card">
                <h1>Technology have a great impact in creating Job</h1>
              </div>
              <div class="stat-card">
                <h1>Reduces the stress in production and make high quality product</h1>
              </div>
              <div class="stat-card">
                <h1>Technology help to make awareness more simple and easy to reach</h1>
              </div>   
          </div>
          <div>
            <img src="https://images.unsplash.com/photo-1573166953836-06864dc70a21?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGJsYWNrJTIwZ2lybCUyMG9uJTIwbGFwdG9wfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
          </div>
          <div class="stat-container-right">
            <div class="stat-card">
              <h1>Technology help to make awareness more simple and easy to reach</h1>
            </div>
            <div class="stat-card">
              <h1>Technology is a sustainable source of income</h1>
            </div>
            <div class="stat-card">
              <h1>Contribute to global economic growth</h1>
            </div>
          </div>
        </main>
      </div>
      <div class="mission">
          <h1 class="header">Our Mission</h1>
          <p>Ensuring all genders have equal opportunity for economic growth and public life.Also,to empower boys and girls with digital skills, while creating awareness on the social problems that causes gender barriers such as gender-based violence, gender inequality in education, child marriage,etc.</p>
      </div>
    </div>

    <footer>
      <div class="rahisi_sect">
          <h1 class="rahisi">Logo</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
              Nam mollis, justo nec porttitor auctor, erat sapien faucibus lectus, 
              vel tempor dolor augue et lectus. 
          </p>
      </div>

      <div class="home_sect">
          <h1 class="home">Home</h1>
          <ul>
              <li>About Us</li>
              <li>Contact</li>
              <li>Login</li>
              <li>Register</li>
          </ul>
      </div>

  

      <div class="contact_sect">
          <h1 class="contact">Contact</h1>
          <p>G-gram@gmail.com</p>
          <ul>
              <li><i class="fa-brands fa-square-facebook fa-2xl"></i></li>
              <li><i class="fa-brands fa-square-twitter fa-2xl"></i></li>
              <li><i class="fa-brands fa-linkedin fa-2xl"></i></li>
              <li><i class="fa-brands fa-square-instagram fa-2xl"></i></li>
          </ul>
      </div>
</footer>

  </div>
</body>
</html>