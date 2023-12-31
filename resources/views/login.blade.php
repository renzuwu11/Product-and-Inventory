<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Glacial+Indifference&display=swap">
    <style>
        body {
            font-family: 'Glacial Indifference', sans-serif;
            background-image: url('assets/img/logos/comet.al-login-admin.png'); /* Adjust the path as needed */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .left-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .tagline {
            margin: 0;
            padding-left: 160px;
            font-size: 20px;
            text-align: center;
        }
        .login-form {
            background-color: #9CB2CE; 
            padding: 20px;
            border-radius: 8px;
            margin-left: 17%;
            height: 80vh;
            width: 35%;
        }
        .welcome {
            font-size: 30px;
            text-align: center;
            padding-left: 10px;
            margin-top: 10vh;
            margin-bottom: 0vh;
        }
        .tl {
            font-size: 14px;
            text-align: center;
            margin-top: 1vh;
        }
        .email{
            font-size: 18px;
            margin-top: 8vh;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 10px);
            padding: 6px; 
            font-size: 14px;
            border: 0.1px solid black;
            border-radius: 8px; 
            margin-top: 1vh;
        }
        input[type="text"],
        input[type="password"]:focus { 
            border-color: black;
            box-shadow: 0 0 5px rgba(152, 221, 202, 0.5); 
        }
        .password{
            font-size: 18px;
            margin-top: 3vh;
        }
        .login button {
            background-color: #FFFFFF;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
            margin-left: 43%;
            margin-top: 10vh;
        }
        .login button:hover {
            background-color: #FBE0CD;
        }
    </style>
</head>
<body>
<div class="left-side">
    <div class="tagline">
        <h1>LOGO</h1>
        <p>Discover your own comet's trail</p>
    </div>
</div>
<div class="login-form">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <h2 class="welcome">WELCOME</h2>
            <p class="tl">Enter your email and password</p>
        </div>
        <div class="email">
            <label for="email">Email</label>
        </div>
        <div>
            <input type="text" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="password">
            <label for="password">Password</label>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="Enter your password">
        </div>
        <div class="login">
            <button type="submit">Log in</button>
        </div>
    </form>
</div>

</body>
</html>
