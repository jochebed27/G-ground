<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 
    <h1>SignUp Form</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            First Name: <input type="text" name="firstname" placeholder="firstname" value="{{ old('firstname')}}">
            @if ($errors)
               @error ('firstname')
                  <p>{{$message}}</p>
               @enderror
            @endif
        </div>
        <div class="form-group">
           Last Name:<input type="text" name="lastname" placeholder="lastname" value="{{ old('lastname')}}"> 
           @if ($errors)
            @error ('lastname')
                <p>{{$message}}</p>
            @enderror
           @endif
        </div>
        <div class="form-group">
            Enter Email: <input type="email" name="email" placeholder="email address" value="{{ old('email')}}">
            @if ($errors)
               @error ('email')
                  <p>{{$message}}</p>
               @enderror
            @endif
        </div>
       <div class="form-group">
       Gender <input type="text" name="gender" value="{{old('gender')}}" placeholder="Female or Male" >
       
        @if ($errors)
            @error ('gender')
                <p>{{$message}}</p>
            @enderror
        @endif
       </div>
       <br>
       <div class="form-group">
         Age: <input type="text" name="age" value="{{old('age')}}" placeholder="age">
         @if ($errors)
           @error ('age')
             <p>{{$message}}</p>
            @enderror
         @endif   
       </div>
       <div class="form-group">
          Address: <input type="text" name="address" value="{{ old('address')}}" placeholder="address">
          @if ($errors)
            @error ('address')
                <p>{{$message}}</p>
            @enderror
          @endif
       </div>

       <br>
       <div class="form-group">
          Password: <input type="password" name="password" placeholder="password" value="{{ old('password')}}">
          @if ($errors)
            @error ('password')
                <p>{{$message}}</p>
            @enderror
          @endif
       </div>
       <div class="form-group">
            Confirm password: <input type="password" name="password_confirmation" placeholder="confirm password">
            @if ($errors)
               @error ('password_confirmation')
                  <p>{{$message}}</p>
               @enderror
            @endif
       </div>
       <div class="">
          <input type="submit" value="Sign Up">
       </div>
       <p>Already have an Account?<a href="/login">Login.</a></p>
    </form>
</body>
</html>