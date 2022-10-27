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
   <div class="register-wrapper">
    <h1>Sign Up</h1>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
         <div class="input-container">
            <label for="firstname">First name</label>
            <input type="text" class="input-field" name="firstname"  value="{{ old('firstname')}}">
            @if ($errors)
            @error ('firstname')
               <p style="color: red">{{$message}}</p>
            @enderror
         @endif
         </div>
        
         <div class="input-container">
            <label for="lastname">Last name</label>
           <input type="text" class="input-field" name="lastname" value="{{ old('lastname')}}"> 
           @if ($errors)
           @error ('lastname')
               <p style="color: red">{{$message}}</p>
           @enderror
          @endif
         </div>
       
         </div>
    
       <div class="form-group">
         <div class="input-container">
            <label for="gender">Gender</label>
            <input type="text" name="gender" class="input-field" value="{{old('gender')}}"  >
            @if ($errors)
            @error ('gender')
                <p style="color: red">{{$message}}</p>
            @enderror
        @endif
         </div>
   
       <br>
         <div class="input-container">
            <label for="age">Age</label>
            <input type="text" name="age" class="input-field" value="{{old('age')}}">
            @if ($errors)
            @error ('age')
              <p style="color: red">{{$message}}</p>
             @enderror
          @endif  
         </div>
       
       </div>
       <div >
         <div class="input-container">
            <label for="email">Email address</label>
            <input type="email" style="width: 380px" name="email" class="input-field"  value="{{ old('email')}}">
            @if ($errors)
            @error ('email')
               <p style="color: red">{{$message}}</p>
            @enderror
         @endif
         </div>
         
        </div>
       <div>
         <div class="input-container">
            <label for="address">Address</label>
            <input type="text" style="width: 380px" name="address" class="input-field" value="{{ old('address')}}" >
            @if ($errors)
            @error ('address')
                <p style="color: red">{{$message}}</p>
            @enderror
          @endif
         </div>
     
       </div>

       <br>
       <div class="form-group">
         <div class="input-container">
            <label for="password">Password</label>
            <input type="password" class="input-field" name="password" value="{{ old('password')}}">
            @if ($errors)
            @error ('password')
                <p style="color: red">{{$message}}</p>
            @enderror
          @endif
         </div>
       
         <div class="input-container">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="input-field" name="password_confirmation" >
         </div>
            @if ($errors)
               @error ('password_confirmation')
                  <p style="color: red">{{$message}}</p>
               @enderror
            @endif
       </div>
       <div class="register-btn">
          <input type="submit" value="Sign Up">
          <p>Already have an Account?<a href="/login">Login.</a></p>
       </div>
      
    </form>
   </div>
</body>
</html>