<?php
require_once('connect.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Database project</title>
    <link rel="stylesheet" type="text/css" href="stylesbackup1.css">

  </head>
  <div class="header">
    <div class="logoWrapper">
      <img class="logo" src="https://st4.depositphotos.com/25464256/27467/v/1600/depositphotos_274673818-stock-illustration-washing-clothes-logo-icon-vector.jpg" border="0" />
      <div class="topnav">
        <a href="usersignin.php">Log in</a>
        <a href="userregister.php">Sign up</a>
        <a href="usermanagement.php">Home</a>
        <a href="welcome.php">Go back</a>
      </div>
    </div>
    <div class="motto">
      <h1>LAUNDRY MANAGEMENT SYSTEM</h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">
<!-- if(isset($_SESSION['userStatus']) && (($_SESSION['userStatus']=="STAFF") || ($_SESSION['userStatus']=="ADMIN"))){ -->
    <?php
      if(isset($_SESSION['memberUserId']) ){
    ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" border="0" />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp".$_SESSION['userFirstName']."&nbsp".$_SESSION['userLastName']."<br>"."<br>"."Status:".$_SESSION['memberType']."<br><br>"."Bonus points:".$_SESSION['bonusPoint'];
              ?>
              <br>
              <br>
              <a href="logout.php">Logout</a>
            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackservice.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>
              <div class="rightSecondRow">
                <a href="benefit.php">
                  <div class="viewHistorymWrapper">
                    <h1>View benefit of bonus point</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
    <?php }
      else {
        ?>
        <div class="boxWrapper">

          <div class="box1">
            <div class="profileWrapper">
              <img class="profileImg" src="person.png" border="0" />
            </div>
            <div class="pofileText">
              <?php
              echo "Hello"."&nbsp"."Guest"."<br>"."<br>"."Please Signup or login<br>"."to receive the bonus";
              ?>
              <br>
              <br>

            </div>

          </div>
          <div class="box2">

              <div class="rightSecondRow">
                <a href="trackservice.php">
                  <div class="regisItemWrapper">
                    <h1>Track Service Process</h1>
                  </div>
                </a>

              </div>

          </div>


      </div>
  <?php  } ?>

    </div>
  </div>

  <footer>
    <div class="footerContent">
      <div class="logoWrapper">
      </div>
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
