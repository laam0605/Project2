<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(175deg, #C7C5F4, #776BCC);
        }

        .register-container {
            background-color: rgba(200,200,200,0.13);
            /*border-radius: 8px;*/
            /*box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);*/
            overflow: hidden;
            width: 300px;
            /*padding: 35px;*/
            transition: transform 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
            border-radius: 10px;
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            padding: 50px 35px;
        }

        .register-container:hover {
            transform: translateY(-5px);
        }



        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            border: none;
            border-bottom: 2px solid #D1D1D4;
            background: none;
            padding: 10px;
            padding-left: 24px;
            font-weight: 700;
            width: 75%;
            transition: .2s;;
        }
        .form-group input:active,
        .form-group input:focus,
        .form-group input:hover {
            outline: none;
            border-bottom-color: #6A679E;
        }

        .form-group button {
            margin-top: 10px;
            width: 280px;
            height: 55px;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;

            cursor: pointer;
        }

        img {
            width: 20px;
            margin-left: 10px;
            margin-top: 20px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: aquamarine;
        }
        @import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

    </style>
</head>
<body>
<div class="register-container">
    <form action="/registerPost" method="post">
        @csrf
        <div class="form-group">
            <label for="">FullName</label>
            <input type="text" name="fullName" placeholder="Full Name">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password" id="password">
            <img src="image/eye-closed.png" id="eyeicon">
        </div>
        <div class="form-group">
            <button type="submit">Register</button>
        </div>
    </form>
</div>

<script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");

    eyeicon.onclick = function (){
        if (password.type == "password"){
            password.type = "text";
        }else {
            password.type = "password";
        }
    }
</script>


</body>
</html>
