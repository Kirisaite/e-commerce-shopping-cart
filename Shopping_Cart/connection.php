 <?php 

$server="127.0.0.1"; 
$user="root"; 
$pass=""; 
$db="shopping_cart"; 
      
$connect = mysqli_connect($server, $user, $pass) or die ("ごめんなさい");
$dbselect = mysqli_select_db($connect, $db) or die("ごめんなさい");

?>