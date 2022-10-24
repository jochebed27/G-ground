<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <table width="800px" border="1px">
        <tr>
            <td>S/N</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Gender</td>
            <td>Age</td>
            <td>Email</td>
            <td>Address</td>
            
            
        </tr>
       @foreach($gender as $gender)
        <tr>
            <td>{{$gender['id']}}</td>
            <td>{{$gender['firstname']}}</td>
            <td> {{$gender['lastname']}}</td>
            <td>{{$gender['gender']}}</td>
            <td>{{$gender['age']}}</td>
            <td> {{$gender['email']}}</td>
            <td> {{$gender['address']}}</td>
             <td><a href = "{{route('edit', $gender->id)}}"><button>Edit</button></a></td>
            <td><a href = "{{route('delete', $gender->id)}}"><button>Delete</button></a></td>
            <td><a href="{{route('info',$gender['id'])}}">View Details</a></td>
        <tr>
        @endforeach
        

        {{-- @foreach ((array)$gender as $item)
        <tr> 
            <td>{{$item['id']}}</td>
            <td>{{$item['firstname']}}</td>
            <td>{{$item['lastname']}}</td>
            <td>{{$item['gender']}}</td>
            <td>{{$item['age']}}</td>
            <td>{{$item['email']}}</td>
            <td>{{$item['address']}}</td>
            

           
            
        </tr>        
        @endforeach --}}
    </table>
</body>
</html>

