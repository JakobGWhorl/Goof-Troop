<!DOCTYPE html>
<html lang="en">
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
    <a href="http://127.0.0.1:8000/admin_dashboard"><button><span>Back</span></button></a>
</body>
</html>