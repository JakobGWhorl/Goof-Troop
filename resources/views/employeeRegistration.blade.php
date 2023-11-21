<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action={{ url('/api/employees') }} method="POST">
    @csrf
    <label for="">First Name</label>
    <input type="text" name="first_name">
    <br>
    <label for="">Last Name</label>
    <input type="text" name="last_name">
    <br>
    <label for="">Role</label>
    <input type="text" name="role">
    <br>
    <label for="">Email</label>
    <input type="text" name="email">
    <br>
    <label for="">Phone</label>
    <input type="text" name="phone">
    <br>
    <label for="">Password</label>
    <input type="text" name="password">
    <br>
    <label for="">dob</label>
    <input type="date" name="dob">
    <input type="submit">
    <br>


</form>



</body>
</html>