<?php 

error_reporting(0);
//$conn=mysqli_connect("files.000webhost.com","databasecollection","sabarinathan33","id17584622_student","21");

$conn=mysqli_connect('localhost','root','','student');
if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
   //$sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysqli_query($conn,"select * from sales where salesid='".$uname."'AND pswd='".$password."' limit 1"); //(error!!)
    
    if(mysqli_num_rows($result)==1){	
        header("Location:insert.php");
     
        echo '<script type="text/JavaScript"> 
             alert("You Have Successfully Logged in ");
             </script>'
            ;
        exit();
    }
   
    else{
       
        echo '<script type="text/JavaScript"> 
        alert("User name and password is incorrect");
        window.location.href = "http://localhost//project-intershala/admin%20pannel/index.php";
        </script>'
        ;
     
     
    }
        
}
?>