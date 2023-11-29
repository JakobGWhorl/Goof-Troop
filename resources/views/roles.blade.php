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
    
<<<<<<< HEAD
<form action={{ url('') }} method="POST" class="form">
    @csrf 
    <div>
        <Label for="">Role</Label>
        <label for="">Access Level</label>
    </div> 
    <div class="form-input">  
    <label for=""> New Role</label>
    <input type="text" name="role">
    </div>
    <div class="form-input">
    <label for="">Access Level</label>
    <input type="intager" name="access_level">
    <input type="submit">
=======
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
>>>>>>> 8df578594644cc1890f4337d378fff0d2aeeb90b
    </div>

</form>



</body>
</html>