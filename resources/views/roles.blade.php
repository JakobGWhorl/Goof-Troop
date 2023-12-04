<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
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
    </div>

</form>




</form>

</body>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">
            
          </form>
          <a href="http://127.0.0.1:8000/admin"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
</html>
