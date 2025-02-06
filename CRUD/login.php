<html>
<head>
	<title>Cara Membuat Form Login Sederhana Tapi Berkelas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    body {
      background: #67809f;
      font-family: 'Open Sans', sans-serif;
    }
    .login {
      width: 400px;
      margin: 16px auto;
      font-size: 16px;
    }
    /* Reset top and bottom margins from certain elements */
    .login-header,
    .login p {
      margin-top: 0;
      margin-bottom: 0;
    }
    .login-header {
      background: #2c3e50;
      padding: 20px;
      font-size: 1.4em;
      font-weight: normal;
      text-align: center;
      text-transform: uppercase;
      color: #fff;
    }
    .login-container {
      background: #ebebeb;
      padding: 12px;
    }
    /* Every row inside .login-container is defined with p tags */
    .login p {
      padding: 12px;
    }
    .login input {
      box-sizing: border-box;
      display: block;
      width: 100%;
      border-width: 1px;
      border-style: solid;
      padding: 16px;
      outline: 0;
      font-family: inherit;
      font-size: 0.95em;
    }
    .login input[type="email"],
    .login input[type="password"] {
      background: #fff;
      border-color: #bbb;
      color: #555;
    }
    /* Text fields' focus effect */
    .login input[type="email"]:focus,
    .login input[type="password"]:focus {
      border-color: #888;
    }
    .login input[type="submit"] {
      background: #2c3e50;
      border-color: transparent;
      color: #fff;
      cursor: pointer;
    }
    .login input[type="submit"]:hover {
      background: #17c;
    }
    /* Buttons' focus effect */
    .login input[type="submit"]:focus {
      border-color: #05a;
    }
    .kirim {
      background: #2c3e50;
      width: 90%;
      font-family: inherit;
      font-size: 0.95em;
    }
  </style>
</head>
<body>
<div class="login">
    <h2 class="login-header">Form Login</h2>
        <form action="ProsesLogin.php" method="POST" class="login-container">
            <p>
                <input type="text" name="username" id="username" placeholder="Username" required="">
            </p>
            <p>
                <input type="password" name="password" id="password" placeholder="Password" required="">
            </p>
            <p>
              <center>
                <button type="submit" name="submit" class="btn btn-dark">Log In</button><br>
                <a href="register.php">Sig In</a>
              </center>
            </p>
        </form>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>