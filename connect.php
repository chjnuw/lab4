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
  </head>
  <body>

<?php  $sql_1 = "SELECT Id,Sname,Slastname FROM tbl_std";
       $qry_1 = mysql_query($sql_1, $surachet) or die(mysql_error());
       $row_total= mysql_num_rows($qry_1);

while ($data_1 = mysql_fetch_array($qry_1)) { ?>
<div class=""><?php echo $data_1['Id']; ?> <?php echo $data_1['Sname']; ?></div>
<?php } ?>

จำนวนนักศึกษา ทั้งสิ้น <?php echo $row_total; ?>

  </body>
</html>
