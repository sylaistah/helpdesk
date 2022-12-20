<?php

include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM tb_user ORDER BY id_user DESC");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="sign.css" />
    <title>HelpDesk</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="login.php" class="sign-in-form" id="signIn" method="post" >
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" id="email" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="password" name="password"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <select class="form-select" name="type">
                <option>mahasiswa</option>
                <option>admin</option>
                <option>customer service</option>
              </select>
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>

          <form action="register.php" class="sign-up-form" id="signUp" method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nama Lengkap" id="nama" name="nama"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" id="email" name="email"/>
            </div>
            <div class="input-field">
                <i class="fas fa-phone-square-alt"></i>
                <input type="tel" pattern="^\d{11/12}$" placeholder="Nomor Telepon" id="mobile" name="mobile"  />
              </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" id="password" name="password"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <select class="form-select" name="type">
                <option>mahasiswa</option>
              </select>
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <img src="logo.png" class="image" alt="" />
           <div class="content">
            <h3>New here ?</h3>
            <p>
              Tekan tombol sign up!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Hello, let's solve your problem with us!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="logo.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="sign.js"></script>
  </body>
</html>