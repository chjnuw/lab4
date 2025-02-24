<?php
session_start();

$hostname_surachet = "localhost";
$database_surachet = "u299560388_651226";
$username_surachet = "u299560388_651226";
$password_surachet = "MH7138Tj";
$surachet = mysql_pconnect($hostname_surachet, $username_surachet, $password_surachet) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database_surachet, $surachet);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>




    <div class="w3-content">

      <div class="w3-row w3-padding">
        Master Page - แสดงรายชื่อนักศึกษา
      </div>

      <div class="w3-row w3-light-gray">
        <div class="w3-col w3-center" style="width:5%;">รหัส</div>
        <div class="w3-col" style="width:10%;">ชื่อ</div>
        <div class="w3-col w3-padding" style="width:10%;"> &nbsp; </div>
      </div>

  <?php  $sql_1 = "SELECT CategoryName FROM Categories";
         $qry_1 = mysql_query($sql_1, $surachet) or die(mysql_error());
         $row_total= mysql_num_rows($qry_1);

  while ($data_1 = mysql_fetch_array($qry_1)) { ?>

    <div class="w3-row w3-amber w3-border-bottom w3-border-black">
      <div class="w3-col w3-center" style="width:5%;"><?php echo $data_1['CategoryId']; ?></div>
      <div class="w3-col" style="width:10%;"><?php echo $data_1['CategoryName']; ?></div>
      <div class="w3-col w3-padding" style="width:10%;"> <a class="w3-button w3-orange" href="detail.php?Id=<?php echo $data_1['CategoryID']; ?>">></a>  </div>
    </div>

  <?php } ?>

  จำนวนนักศึกษา ทั้งสิ้น <?php echo $row_total; ?>
    </div>

  </body>
</html>
