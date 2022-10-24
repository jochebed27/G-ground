<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="nav-links">
        <a class="active" href="/">Home</a>
        <a href="/courses">Courses</a>
        <a href="/logout">Logout</a> 
        <a href="{{route('userinfo')}}">View my details</a>
        {{-- @if($genders)
        <a href="{{route('info',$genders['id'])}}">View Details</a>
        @endif --}}

    </div>
    <p>Logged in successfully...</p>

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