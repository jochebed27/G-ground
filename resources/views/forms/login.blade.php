<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Anybody&family=Cinzel&family=Courgette&family=Koulen&family=Montserrat:wght@400;500&family=Poppins&display=swap')}}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="nav-container">
        <h1><a href="/" style="text-decoration: none">Logo</a></h1>
          <ul class="nav-links">
             @auth
             <a href="/" style="color: black">Home</a>
             <a href="#about" style="color: black">About Us</a>
             <a href="#" style="color: black">Contact</a>
             
             
             <select>
              <option value="Courses">Courses</option>
             </select>
             <a href="/logout">Logout</a>     
             @else
             <a href="/" class="link" style="color: black">Home</a>
             <a href="#about" class="link" style="color: black">About Us</a>
             <a href="#" class="link" style="color: black">Contact</a>
             <a href="/blog" class="link" style="color: black">Blog</a>
             <a class='login-btn'  href="/login">Login</a>    
             <a  class="reg-btn" href="/signUp">Register</a>
             @endauth
          </ul>
        </nav>
<div class="form-wrapper">
    <div class="form-container">
        <h1>Login</h1>
        <form action="{{route('authenticate')}}" method="POST">
            @csrf
            <div class="input-container">
                <label for="email">Email address</label>
                <input type="email" class="input-field" name="email" >
            </div>
            <br>
            @if ($errors)
                @error ('email')
                    <p>{{$message}}</p>
                @enderror
            @endif
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" class="input-field" name="password" >
            </div>
            @if ($errors)
                @error ('password')
                    <p>{{$message}}</p>
                @enderror
            @endif
            <div class="btn-wrapper">
                <input type="submit" class="btn" value="Login">
                <p style="text-align: center">Don't  have an Account?<a href="/signUp">Sign Up.</a></p>
            </div>
        </form>
    </div>  
</div>
</body>
</html>