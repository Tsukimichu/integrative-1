<!DOCTYPE html>
<html lang="me">
<head> 
    <meta charset="UTF-8">
    <link rel="icon" type="x-icon" href="{{asset('images/icon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MSC Online Payment System</title>
    <link rel="stylesheet" href="{{asset('css/myStyle.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="logo">
        <img src="{{asset('images/logo.png.png')}}" alt="logos">            
    </div>

    <div class="wrapper">
      
        <form action="" method="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="userName" required> 
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" name="passWord" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="hello">
                <label><input type="checkbox">Remember me</label>
                <a href="forgot_pass.html">Forgot Password</a>
            </div>
            
            <button class="btn" >Login</button>
            
            <div class="register">
                <p>Don't have an account? <a href="{{asset('register')}}">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>