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
        <a href="staffsignin.php">Log in</a>
        <a href="staffregister.php">Sign up</a>
        <a href="management.php">Home</a>
      </div>
    </div>
    <div class="motto">
      <h1>We provide professional laundry service</h1>
    </div>
  </div>
  <body>
    <div class="row">
    <div class="content">

      <div class="boxWrapper">


        <div class="">
          <table>
                  <col width="5%">
                  <col width="5%">
                  <col width="5%">
                  <col width="20%">
                  <col width="15%">
                  <col width="5%">
                  <col width="10%">
                  <col width="10%">
                  <col width="5%">


                  <tr>
                      <th>Service ID</th>
                      <th>Staff ID</th>
                      <th>Member ID</th>
                      <th>Member Name</th>
                      <th>Date In</th>
                      <th>Date Out</th>
                      <th>Service status</th>
                      <th>Total price</th>
                      <th>Update Status</th>

                  </tr>
  		 <?php
  				 	$q="SELECT *,`firstName`,`lastName` FROM `laundryservice`,`member` where `serviceStatus` = 'NF' AND laundryservice.memberId = member.memberId ORDER BY `serviceId`";
  					$result=$mysqli->query($q);
  					if(!$result){
  						echo "Select failed. Error: ".$mysqli->error ;
  						// break;
  					}
  				 while($row=$result->fetch_array()){ ?>
             <?php
              $dashDateOut="";
              if ($row['dateOut']=="0000-00-00") {
                $dashDateOut="-";
              }
              else {
                $dashDateOut=$row['dateOut'];
              }
              ?>
                   <tr>
                      <td><?=$row['serviceId']?></td>
                      <td><?=$row['staffId']?></td>
                      <td><?=$row['memberId']?></td>
                      <td><?=$row['firstName']?> <?=$row['lastName']?></td>
                      <td><?=$row['dateIn']?></td>
                      <td><?=$dashDateOut?></td>
                      <td>Not_Finish</td>
                      <td><?=$row['totalPrice']?></td>
                      <td><a href='checkupdatestatus.php?serviceId=<?=$row['serviceId']?>'> <img src="checkmark.png" width="24" height="24"></a></td>
                  </tr>
  				<?php } ?>


              </table>
        </div>





      </div>

    </div>
  </div>

  <footer>
    <div class="footerContent">
      <div class="logoWrapper">
        <img class="logo" src="BNN.png" border="0" />
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
