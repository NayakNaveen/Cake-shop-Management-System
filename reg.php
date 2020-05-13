<?php
 require("./newcon.php");
$aname = $_POST["aname"];
$bname = $_POST["bname"];
$cname = $_POST["cname"];
$dname = $_POST["dname"];


if($_POST["aname"]!='' && $_POST["bname"]!='' && $_POST["cname"]!='' && $_POST["dname"]!='' )
{
    // if($dname == $ename)
    // {
        $query = "insert into `login` (Fname,Lname,Username,Password) values('$aname','$bname','$cname','$dname')";
        $result = mysqli_query($conn,$query);
        // $conn =mysqli_connect($servername,$dbuser,$dbpass,$database);
        if($result){
    header("Location:http://localhost/scakes/web/login.html");
        }else{
            // mysqli_error($conn);
    header("Location:http://localhost/scakes/web/register.html?msg=registrationfailed");
        }
}
   
else
{
    header("Location:http://localhost/scakes/web/register.html?msg=registrationfailed");
}

?>