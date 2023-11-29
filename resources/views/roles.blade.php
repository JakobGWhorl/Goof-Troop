<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <title>Roles</title>
</head>
<body>
    
<form action={{ url('/api/roles') }} method="POST" class="form">
    @csrf
    <div>
        <h1>Create a Role</h1>
<div class="form-input">
<label for="">Role</label>
<input type="text" name="role">
<label for="">Access Level</label>
<input type="number" name="access_level">
<input type="submit">
<br>
</div>
    </div>

</form>



</body>
</html>