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
        <tr>
            <td>{{$gender['id']}}</td>
            <td>{{$gender['firstname']}}</td>
            <td> {{$gender['lastname']}}</td>
            <td> {{$gender['gender']}}</td>
            <td> {{$gender['age']}}</td>
            <td> {{$gender['email']}}</td>
            <td> {{$gender['address']}}</td>
            
      <tr>
    </table>
</body>
</html>