<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $name = $_POST['password'];
    echo "<h1>Thanks For Login</h1>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Anime Dekho - Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      background: url('./images/pngwing.com\ \(2\).png');
      background-position: right;
      background-size: 30%; 
      background-repeat: no-repeat;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.603);
     
    }
    .login-box {
      position: relative;
      width: 350px;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 5px;
      padding: 40px 30px;
      color: #020202;
      box-shadow: 0 0 25px rgba(250, 8, 8, 0.842);
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 2em;
      color: hsla(0, 100%, 51%, 0.993);
      text-shadow: 0 0 10px #741010;
    }

    .login-box .input-box {
      margin-bottom: 20px;
    }

    .login-box input {
      width: 100%;
      padding: 12px 15px;
      border: none;
      outline: none;
      border-radius: 10px;
      background: rgba(48, 18, 18, 0.171);
      color: #fff;
      font-size: 16px;
      transition: 0.3s;
    }

    .login-box input::placeholder {
      color: #000000;
    }

    .login-box input:focus {
      background: rgba(255, 255, 255, 0.3);
      box-shadow: 0 0 10px #e01616;
    }

    .login-box button {
      width: 100%;
      padding: 12px;
      border: none;
      outline: none;
      border-radius: 10px;
      background: linear-gradient(45deg, #e61919, #010127);
      color: white;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.4s;
      box-shadow: 0 0 15px #ff0000;
    }

    .login-box button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 25px #7a1010;
    }

    .login-box .links {
      margin-top: 15px;
      text-align: center;
    }

    .login-box .links a {
      color: #000000c4;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    .login-box .links a:hover {
      color: #ff0000;
      text-shadow: 0 0 10px #200202;
    }
    @media (max-width: 500px) {
      .login-box {
        width: 85%;
        padding: 30px 20px;
      }
      .login-box h2 {
        font-size: 1.7em;
      }
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Anime Dekho</h2>
    <form method="post" action="./home.html">
      <div class="input-box">
        <input type="text" placeholder="Enter Username" name="name"  required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Enter Password" name="password" required>
      </div>
      <button type="submit">Login</button>
      <div class="links">
        <p>Don’t have an account? <a href="#">Register</a></p>
        <p><a href="#">Forgot Password?</a></p>
      </div>
    </form>
  </div>
</body>
</html>
