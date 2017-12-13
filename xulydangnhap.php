<?php
include ('source/connect.php');
include ('source/layout.php');
if(isset($_POST['ok']))
{
$u=$p="";
 if($_POST['user'] == NULL)
 {
 ?>
 <div align="center">
  <b>Please enter your username</b><br />
  <a href='javascript: history.go(-1)'>Click to back</a>
  </div>
  <?php
 }
 else
 {
  $u=$_POST['user'];
 }
 if($_POST['pass'] == NULL)
 {
  ?>
 <div align="center">
  <b>Please enter your username</b><br />
  <a href='javascript: history.go(-1)'>Click to back</a>
  </div>
  <?php
 }
 else
 {
  $p=$_POST['pass'];
 }
 if($u != NULL && $p != NULL)
 {
  include ('source/connect.php');
  $sql="select * from khach_hang where username='".$u."' and password='".$p."'";
  $query=mysql_query($sql);
  if(mysql_num_rows($query) == 0)
  {
   echo "Username or password is not correct, please try again";
  }
  else
  {
   $rows=mysql_fetch_array($query);
   session_start();
   $_SESSION['username'] = $rows['username'];
   $_SESSION['pass'] = $rows['password'];
   ?>
   <form action="index2.php" method="post">
	<div align="center">
	<b> Login complete! </b></br>
	<input type="submit" value="Ok" />
	</div>
	</form>
	<?php
  }
 }
}

?>


							