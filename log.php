<?php
   include("newcon.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['cname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['dname']); 
      
      $sql = "SELECT * FROM `login` WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         $r=$_SESSION['PRICE'];
         $sql = "SELECT `Custid` FROM `login` WHERE Username = '$myusername'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $a=$row['Custid'];
      $sql = "INSERT INTO `corder`(`Custid`, `price`) VALUES ('$a','$r')";
      $result = mysqli_query($conn,$sql);
         header("Location:http://localhost/scakes/web/thank.html");

         
      }else {
         
         header("Location:http://localhost/scakes/web/fail.html");
         
         }
   }
?>