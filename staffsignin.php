<?php 	require_once('connect.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>ITS351_PROJECT</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">
    <style>
    .navactive {
        color: white;
        background-color: #bcb562;
    }
    </style>
  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="https://st4.depositphotos.com/25464256/27467/v/1600/depositphotos_274673818-stock-illustration-washing-clothes-logo-icon-vector.jpg" border="0" />
      <div class="topnav">
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    </div>

  </div>
  <body>
    <div class="registerContent">
      <div class="registerDiv">
        <h1>Sign In (STAFF,ADMIN)</h1>
        <hr>
        <br>
        <form action="checklogin.php" method="post">


          <label for="userName">Username</label>
          <input type="text" id="mail" name="userName" placeholder="Your Username">

          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Your password">


          <a href="forgot.php">Forget password ? </a>
          <input type="submit" name="signInSubmit" value="SignIn">
        </form>
      </div>
</div>

<footer>
  <div class="footerContent">
    
    <div class="rightFooter">
      <div class="memberCredit">
     
      </div>
      <div class="nameList">
        <ul id="name">
   
        </ul>

      </div>
    </div>
  </div>
</footer>

</body>

</html>
