<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Roles</title>
</head>
<body>
    
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
    </div>

</form>



</body>
</html>