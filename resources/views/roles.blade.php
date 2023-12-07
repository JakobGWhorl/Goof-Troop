<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css') }}>
    <title>Roles</title>
</head>
<body>


<form action={{ url('') }} method="POST" class="form">
    @csrf 
    <div class="form-input">  
        <label for=""> New Role: </label>
        <input type="text" name="role">
    </div>
    <div class="form-input">
        <label for="">Access Level: </label>
        <input type="intager" name="access_level">
        &nbsp;&nbsp;
    <input type="submit" class="app_button">
    </div>

</form>
        <table class="middle roles">
            <tr>
                <th>Role</th>
                <th>Access Level</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
        </table>


</body>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="app_button">
    </form>
            
          </form>
          <a href="{{ session('dashboard') }}"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
</html>
