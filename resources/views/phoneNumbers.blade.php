<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost/PhoneBookApp/public/">
    <title>Document</title>
</head>
<body>
    
<table>
  <tr>
    <th>PhoneId</th>
    <th>PhoneNumber</th>
    <th>Name</th>
    <th>Email</th>
  </tr>
  @foreach($result as $phoneNumber)
    <tr>
        <td><a href="phoneNumbers/{{$phoneNumber->phoneId}}">{{$phoneNumber->phoneId}}</a></td>
        <td>{{$phoneNumber->phoneNumber}}</td>
        <td>{{$phoneNumber->name}}</td>
        <td>{{$phoneNumber->email}}</td>
    </tr>
@endforeach
</table>
</body>
</body>
</html>