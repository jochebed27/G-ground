<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <ul class="nav-links">
           @auth
           
           <a href="#">Courses</a>
           <a href="/logout">Logout</a>     
           @else
           <a class="active" href="/">Home</a>
           <a href="#about">About Us</a>
           <a href="#">Contact</a>
           <a href="/blog">Blog</a>
           <a href="/signUp">Register</a>
           <a href="/login">Login</a>    
           @endauth
           
            
        </ul>
    </div>

    <div class="about-us">
        <h3 id="about">ABOUT</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis mollitia, possimus<br> 
        perferendis obcaecati nam debitis maxime odit blanditiis. Perspiciatis libero assumenda<br> 
        ratione doloremque, totam blanditiis rerum sed facilis similique. Debitis maiores, alias <br>
        saepe neque animi nulla deleniti odit sapiente. Corrupti, error reprehenderit vel aliquid<br> 
        esse distinctio! Officiis veniam dolores expedita.
        </p>
    </div>    

    <!-- Footer section -->
  <div class="main-footer">
    <div class="logo-2">
      <img src="" alt="logo">
    </div>
    <div class="nav-links">
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#">Article</a></li>
        <li><a href="/blog">Blog</a></li>
      </ul>
    </div>
    <div class="socials">
      <p>Reach us on our social media</p>
      <div class="icon">
        <a href="#"><img src="" alt="facebook"></a>
        <a href="#"><img src="" alt="instagram"></a>
        <a href="#"><img src="" alt="whatsapp"></a>
      </div>
    </div>
  </div>
</body>
</html>