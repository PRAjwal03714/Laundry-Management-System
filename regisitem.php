<?php 	require_once('connect.php');
session_start();
$count=0;
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
      <?php
        if(isset($_SESSION['userStatus']) && ($_SESSION['userStatus']=="STAFF" || $_SESSION['userStatus']=="ADMIN" ) ){
      ?>
      <div class="boxWrapper high1020">

        <!-- <img class="regisitemImageWrapper" src="water.jpg" alt=""> -->
        <form class="regisForm " action="checkregisitem.php" method="post">
          <table  border="0">
            <col width="2%">
            <col width="40%">
            <col width="10%">
            <col width="10%">
            <th>checkbox</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
          <?php
          $JSCheckBoxArray = array();
          $JSTexyInputArray = array();
          // $count=0;

				 	$q="select * from item";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error ;
					}
          while($row=$result->fetch_array()){ ?>
            <tr>
            <?php
            array_push($JSCheckBoxArray,$row['itemName']."CheckBox");
            array_push($JSTexyInputArray,$row['itemName']."Vol");
            ?>

            <td>    <input type="checkbox" id="<?=$row['itemName']."CheckBox"?>" name="<?=$row['itemName']."CheckBox"?>" value="<?=$row['itemName']."IsChecked"?>"></td>
            <td>    <label for="<?=$row['itemName']?>"><?=$row['itemName']?></label></td></td>
            <td>    <label for="<?=$row['price']?>"><?=$row['price']?></label></td></td>
            <td>    <input style="text-align: center" type="number"id= "<?=$row['itemName']."Vol"?>" readonly name=<?=$row['itemName']."Vol"?> value=0 ></td>
                <br>
              </tr>
              <?php $count++; ?>
				<?php } ?>
      </table>
        <br><br>
        <input type="checkbox" id="haveMemberCheckbox" name="haveMemberCheckbox">
        <label for="haveMemberText">MemberId?</label>
        <input type="number" id="memberIdInput" name="memberIdInput" readonly value="">
        <input type="hidden" name="useMember" id="useMember" value="0">

        <div class="regisItemSubmitWrapper padding10">

          <input  type="submit" name="regisItemSubmit" value="regisItem">
        </div>
        </form>

          <!-- <img class="regisitemImageWrapper" src="water.jpg" alt=""> -->

      </div>
      <?php
    }else {
      echo "<h1>NOPERMISSION</h1>";
    }
    ?>
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

<?php
$script="";
$scriptStart ="<script>";
$scriptStop = "</script>";
for ($i=0; $i <$count ; $i++) {
  // echo $JSCheckBoxArray[$i];
  // echo $JSTexyInputArray[$i];
  $script = $script.$scriptStart."document.getElementById('".$JSCheckBoxArray[$i]."').onchange = function() {document.getElementById('".$JSTexyInputArray[$i]."').readOnly  = !this.checked; document.getElementById('".$JSTexyInputArray[$i]."').value  = '0';};".$scriptStop;
}
echo $script;
// echo "<script> document.getElementById('haveMemberCheckbox').onchange = function() {document.getElementById('memberIdInput').readOnly  = !this.checked; document.getElementById('memberIdInput').value  = '';document.getElementById('useMember').value  = '1';};</script>";
echo "<script> document.getElementById('haveMemberCheckbox').onchange = function() {document.getElementById('useMember').value  = '1';document.getElementById('memberIdInput').readOnly  = !this.checked;document.getElementById('memberIdInput').value  = '';};</script>";
 ?>
 </html>