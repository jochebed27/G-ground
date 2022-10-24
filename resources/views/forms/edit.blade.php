<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
    @if($gender)
        <form action="{{route('update', $gender->id)}}" method="POST" enctype="multipart/form-data">
           @csrf 
           <div class="form-group">
            First Name: <input type="text" name="firstname" placeholder="firstname" value={{$gender->firstname}}>
            @if ($errors)
               @error ('firstname')
                  <p>{{$message}}</p>
               @enderror
            @endif
        </div>
        <div class="form-group">
           Last Name:<input type="text" name="lastname" placeholder="lastname" value={{$gender->lastname}}> 
           @if ($errors)
            @error ('lastname')
                <p>{{$message}}</p>
            @enderror
           @endif
        </div>
        <div class="form-group">
            Enter Email: <input type="email" name="email" placeholder="email address" value={{$gender->email}}>
            @if ($errors)
               @error ('email')
                  <p>{{$message}}</p>
               @enderror
            @endif
        </div>

        <div class="form-group">
        Gender <input type="text" name="gender" value={{$gender->gender}}>
        @if ($errors)
            @error ('gender')
                <p>{{$message}}</p>
            @enderror
        @endif
        </div>
       <br>
       <div class="form-group">
         Age: <input type="text" name="age" placeholder="age" value={{$gender->age}}>
         @if ($errors)
           @error ('age')
             <p>{{$message}}</p>
            @enderror
         @endif   
       </div>
       <div class="form-group">
          Address: <input type="text" name="address" placeholder="address" value={{$gender->address}} >
          @if ($errors)
            @error ('address')
                <p>{{$message}}</p>
            @enderror
          @endif
       </div>

       <br>
       <div class="form-group">
          Password: <input type="password" name="password" placeholder="password" value={{$gender->password}}>
          @if ($errors)
            @error ('password')
                <p>{{$message}}</p>
            @enderror
          @endif
       </div>
       <div class="form-group">
            Confirm password: <input type="password" name="password_confirmation">
            @if ($errors)
               @error ('password_confirmation')
                  <p>{{$message}}</p>
               @enderror
            @endif
       </div>
       <div class="">
          <input type="submit" value="Update">
       </div>
        </form>
    @endif

  
</body>
</html>