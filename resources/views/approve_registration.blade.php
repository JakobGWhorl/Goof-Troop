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
        <div class="format">
            <h1 class="title">Registration Approval</h1>
            <div class="form-input">
                <Label>Name</Label>
                <label for="">Role</label>
                <label for="yes">Yes</label>
                <input type="checkbox" name="yes" class="checkbox">
                <label for="no">No</label>
                <input type="checkbox" name="no" class="checkbox">
            </div>
            
            <div class="form-input">
                <button id="ok" class="appbutton">Ok</button>
                <button id="cancel" class="appbutton">Cancel</button>
            </div>
        </div>
        
    </form>
   
</body>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
      @csrf
     <input type="submit" value="Logout" class="app_button">
  </footer>
</html>