<!DOCTYPE html>
<head>

    <title>Payments Due</title>
</head>
<body>
    <form action={{ url("") }} method="POST" class="form">
        @csrf
        <div>
            <h1>Payments Due</h1>
            <Label>payments</Label>

            <div id="buttons">
                <button id="back">Back</button>
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