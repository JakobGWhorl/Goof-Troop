<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roles</title>
</head>
<body>
    
<form action={{ url('/api/roles') }} method="POST">
    @csrf
<label for="">Role</label>
<input type="text" name="role">
<br>
<label for="">Access Level</label>
<input type="number" name="access_level">
<br>
<input type="submit">
<br>


</form>



</body>
</html>