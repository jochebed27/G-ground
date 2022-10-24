<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{route('authenticate')}}" method="POST">
        @csrf
        Email: <input type="email" name="email" placeholder="email"><br>
        @if ($errors)
            @error ('email')
                <p>{{$message}}</p>
            @enderror
        @endif
        Password: <input type="password" name="password" placeholder="password">
        @if ($errors)
            @error ('password')
                <p>{{$message}}</p>
            @enderror
        @endif
        <div class="btn">
            <input type="submit" value="Login">
         </div>
         <p>Don't  have an Account?<a href="/signUp">Sign Up.</a></p>
    </form>
</body>
</html>