<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
<head>
    <link rel="stylesheet" href={{ URL::asset('css/app.css') }}>
    <title>Registration Approval</title>
</head>
<body>
    <form action={{ url("") }} method="POST" class="form">
        @csrf
        <div>
            <h1>Registration Approval</h1>
            <div class="form-input">
                <Label>Name</Label>
                <label for="">Role</label>
                <label for="yes">Yes</label>
                <input type="checkbox" name="yes">
                <label for="no">No</label>
                <input type="checkbox" name="no">
            </div>
            
            <div id="buttons">
                <button id="ok">Ok</button>
                <button id="cancel">Cancel</button>
            </div>
        </div>
        
    </form>
   
</body>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">
            
          </form>
          <a href="http://127.0.0.1:8000/caregiver"> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
</html>