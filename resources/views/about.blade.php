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
           <a href="/about" style="color: black">About Us</a>
           <a href="#" style="color: black">Contact</a>
           
           
           <select>
            <option value="Courses">Courses</option>
           </select>
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
      {{-- <div class="about-hero">
        <h1>About Us</h1>
      </div> --}}
      <div class="meet-team">
        <h1>Meet Our Team</h1>
        <div class="team-wrapper">
            <div class="member-container">
                <img src="https://images.unsplash.com/photo-1530785602389-07594beb8b73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YWZyaWNhbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                <h1>Gyang Joan Seleh</h1>
                <h2>Frontend Developer</h2>
            </div>
            <div class="member-container">
                <img src="https://images.unsplash.com/photo-1530785602389-07594beb8b73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YWZyaWNhbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                <h1>Hafsa Yakub Muhammad</h1>
                <h2>Frontend Developer</h2>
            </div>
            <div class="member-container">
                <img src="https://images.unsplash.com/photo-1530785602389-07594beb8b73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YWZyaWNhbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                <h1>Joseph Hezekiah</h1>
                <h2>Frontend Developer</h2>
            </div>
            <div class="member-container">
                <img src="https://images.unsplash.com/photo-1530785602389-07594beb8b73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YWZyaWNhbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                <h1>Joseph Hezekiah</h1>
                <h2>Frontend Developer</h2>
            </div>
            <div class="member-container">
                <img src="https://images.unsplash.com/photo-1530785602389-07594beb8b73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YWZyaWNhbiUyMGZhY2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                <h1>Joseph Hezekiah</h1>
                <h2>Frontend Developer</h2>
            </div>
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