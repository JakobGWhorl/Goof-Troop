<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
<head>

    <title>Registration Approval</title>
</head>
<body>
    <form action={{ url("") }} method="POST" class="form">
        @csrf
        <div>
            <h1>Registration Approval</h1>
            <Label>Name</Label>
            <label for="">Role</label>
            <label for="yes">Yes</label>
            <input type="checkbox" name="yes">
            <label for="no">No</label>
            <input type="checkbox" name="no">
            <div id="buttons">
                <button id="ok">Ok</button>
                <button id="cancel">Cancel</button>
            </div>
        </div>
        
    </form>
   
</body>
<footer class="footer">
    <form action={{ url('/Logout') }} method="POST" class="bottom">
      @csrf
     <input type="submit" value="Logout" class="logout_button">
  </footer>
</html>