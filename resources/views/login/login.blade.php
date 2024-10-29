


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOBAS</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <!-- Memindahkan kode JavaScript ke atas -->
   
</head>
<body>
    <img src="{{asset('img/logofix_1.png')}}" alt="Logo">
    <nav class="container_login">
        <div>
            <h1> MOBENG <br> Administrator</h1>
        </div>
        <div>
            <form action="{{route('sidebare')}}" method="get" class="kotaklogin">
                <label for="uname">Username</label><br>
                <input type="text" placeholder="Enter Your Username" id="uname" name="uname"> <br>
                <label for="pass">Password</label><br>
                <input type="password" placeholder="Enter Your Password" id="pass" name="pass"><br><br>
                <button type="submit">Login</button>
            
            </form>
        </div>
    </nav>

</body>
</html>
