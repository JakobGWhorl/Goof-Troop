<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ URL::asset('css/app.css'); }}>
    <link rel="stylesheet" href={{ URL::asset('css/dashboard.css'); }}>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <title>Supervisor Dashboard</title>
</head>
<body class="bodyHP">
    <div class="enter">
        <div class="header">
            <h1>Roster View</h1>
        </div>

         <form action="Get" class="form">
            @csrf
            <div class="form-input">
                <label> Date</label>
                <input type="date" value="date"/>
                <input type="submit" value="Enter" >
            </div>
            

         </form>
        
        
         

    </div>
</body>
<table id="RosterTable" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
<footer class="footer">
    <div class="bottom">
        <form action={{ url('/Logout') }} method="POST" >
            @csrf
            <input type="submit" value="Logout" class="logout_button">
            
          </form>
          <a href={{ session('dasboard') }}> <button class="back_button" style="vertical-align:middle"><span>Back</span></button></a>
        </div>
  </footer>
</html>
<script>
    let table = new DataTable('#RosterTable', {

});
</script>