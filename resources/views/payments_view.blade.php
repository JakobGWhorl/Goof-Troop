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
    <a href="http://127.0.0.1:8000/admin_dashboard"><button><span>Back</span></button></a>
</body>
</html>