<?php
$con = new mysqli("localhost","root","","student");

if($con->connect_error){
    echo $con->connection_error; 
    die ("the page is not connected");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sabar_I</title>

    <link href="favicon.png" rel="icon">
  </head>
  <body>
   <script>
window.onload = function(){
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      if (e.ctrlKey && e.shiftKey && e.keyCode == 67) {
        disabledEvent(e);
      }
      if (e.ctrlKey && e.keyCode == 67)
      {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
     

      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
};
   </script>   
  <style>

      
span{
  color:red;
  float: right;
  padding-right: 3em;
}

img{
    width: 109px;height: 89px;padding-left: 17px;
}
#motion-demo {
  offset-path: path('M20,20 C20,100 200,0 200,100');
  animation: move 1000ms infinite alternate ease-in-out;2   
  border-radius: 50%;
  width: 40px;
  height: 40px;
  background:cyan;
}

@keyframes move {
  0% {
    offset-distance: 0%;
  }
  100% {
    offset-distance: 95%;
  }
}


        #hide1 ,#hide2 ,#hide3{
            display:none;
        }
        #nakku{
    text-align: center;
    font-size: 23px;
    padding-top: 19px;
    padding-bottom: 17px;
    font-weight: 500;
        }
    
  </style>
            
<div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="card-head">
                                <div class="card-header">
                                <h4 class="card-title"> Insertion and Updation <a href="http://localhost//project-intershala/admin%20pannel/index.php"><span>log out!</span> </a></h4>
                                </div>
                                </div>

                             <div class="card-body">
                                <div class="row">
                                        <div class="col-md-5" style="border-right-style: solid; border-right-color: #99ffdd">
                                                    <form  action="" method="post" enctype="multipart/form-data">
                                                            <div class="mb-2">Enter all the field</div>

                                                <div class="mb-2">
                                                    <label  class="form-label">Name <span>*</span> </label>
                                                    <input type="text" name="name" class="form-control"  Required>
                                                </div>
                                                <div class="mb-2">
                                                    <label  class="form-label">department <span>*</span> </label>
                                                    <input type="text" name="department" class="form-control" Required>
                                                </div>
                                                <div class="mb-2">
                                                    <label  class="form-label">mark <span>*</span></label>
                                                    <input type="text" name="mark" class="form-control" Required>
                                                </div>

                                                <div class="mb-2">
                                                    <label  class="form-label">image </label>
                                                    <input type="file" name="image"class="form-control">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Register number <span>*</span></label>
                                                    <input type="text" name="regno" class="form-control"  Required>
                                                </div>
                                            
                                                <div class="mb-2"><div class="count-box"><a href="#sucess">
                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button></a> 
                                                </div> 
                                    </form>
                                                    </div>
                                        </div >  
                                    
                                <div class="col-md-4" style="border-right-style: solid; border-right-color: #99ffdd">
                                        <form action="" method="post">
                                        <div class="mb-2"> Update </div>  
                                        
                                        <hr style="width:60px; margin-top:1px;">
                                                <div class="mb-2">
                                                    <label class="form-label">REGISTER NUMBER <span>*</span></label>
                                                    <input type="text" name="regno" class="form-control"  Required>
                                                </div>
                                        
                                            <div class="dropdown">
                                                    <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Select
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li class="dropdown-item" name="name" onclick="hide_1()">NAME</li>
                                                        <li><hr class="dropdown-divider"></li>
                                                        <li class="dropdown-item" name="mark" onclick="hide_3()">MARK</li>
                                                    </ul>
                                                    </div>

                                                    <div class="mb-2" id="hide1">
                                                    <label class="form-label">Name</label>
                                                    <input type="text" name="name" class="form-control"  Required>
                                                </div>
                                            
                                                <div class="mb-2" id="hide3">
                                                    <label class="form-label">Mark</label>
                                                    <input type="text" name="mark" class="form-control">
                                                </div>

                                                <div class="mt-4"> </div>
                                                <button type="submit" name="up" class="btn btn-outline-success">Update</button>
                                            </div>
                                        
                                        </form>
                                        <div class="col-md-3">
                                <form action="" method="post">
                                <div class="mb-2"> Delete </div>  
                                        
                                        <hr style="width:60px; margin-top:1px;">
                                                <div class="mb-2">
                                                    <label class="form-label">REGISTER NUMBER <span>*</span></label>
                                                    <input type="text" name="regno" class="form-control"  Required>
                                                </div>
                                            <button type="submit" name="del" class="btn btn-outline-danger">Delete</button>

                                </form>
                                </div>    
                        
                                    </div>
                               
                                    
                                    </div> 
        </div>
                                
        </div> 

               
</div>
           
<?php
 
 error_reporting(0);
if(isset($_POST['up'])){
 $name=$_POST['name'];
 $department=$_POST['department'];
 $mark=$_POST['mark'];
 $regno=$_POST['regno'];
 $chek=mysqli_query($con,"SELECT * FROM sabar WHERE regno='".$regno."' Limit 1");
 if(mysqli_num_rows($chek)==1){
    $val="UPDATE sabar set name='$name',mark='$mark' WHERE regno='$regno' ";

    if($con->query($val))
    {
            
        echo ' <div class="container"> <div class="row"> <div class="col-md-6"  id="nakku"> Data Updated Successfully </div> </div> </div> ';
    }

    else{
        echo ' <div class="container"> <div class="row"> <div id="sucess"><div class="col-md-6"  id="nakku"> Yen la ipdii panraa data va olungaa kudu laa
        </div></div></div> </div> ';
    }
}
else{
    echo ' <div class="container"> <div class="row"> <div id="sucess"><div class="col-md-6"  id="nakku"> InValid Register number
    </div></div></div> </div> ';
}
}

if(isset($_POST['del'])){
    $regno=$_POST['regno'];  
    $chek=mysqli_query($con,"SELECT * FROM sabar WHERE regno='".$regno."' Limit 1");
    if(mysqli_num_rows($chek)==1){
        $regno=$_POST['regno'];
             $res="DELETE FROM sabar where regno='$regno'";
       if($con->query($res))
    {
            
        echo ' <div class="container"> <div class="row"> <div class="col-md-6"  id="nakku"> Deleted  Successfully </div> </div> </div> ';
    }

    else{
        echo ' <div class="container"> <div class="row"> <div id="sucess"><div class="col-md-6"  id="nakku"> Yen la ipdii panraa data va olungaa kudu laa
        </div></div></div> </div> ';
    }   
    }
    else{
        echo ' <div class="container"> <div class="row"> <div id="sucess"><div class="col-md-6"  id="nakku"> Enter Valid Register number
        </div></div></div> </div> ';
    }
}

 if (isset($_POST['submit'])){
 $name=$_POST['name'];
 $department=$_POST['department'];
 $mark=$_POST['mark'];
 $regno=$_POST['regno'];
        $image=$_FILES['image']['tmp_name'];
        $image=file_get_contents($image);
        $image=base64_encode($image);

  $sql ="INSERT INTO sabar (name,department,mark,regno,image) VALUES ('$name','$department','$mark','$regno','$image')";
    
   if($con->query($sql))
    {
            
        echo ' <div class="container"> <div class="row"> <div class="col-md-6"  id="nakku"> Data Inserted Successfully </div> </div> </div> ';
             
          }

    else{
        echo ' <div class="container"> <div class="row"> <div id="sucess"><div class="col-md-6"  id="nakku"> ஏன்ல இப்டி பண்ரா DATAவ ஒழுங்கா குடுலா
</div></div></div> </div> ';
    }

 }
?>


<div class="container">
    
<div id="motion-demo"></div>
<div class="table-responsive">
                   <br>
                   <div class="card-head">
                                <div class="card-header">
                                <h4 class="card-title"> Updated Table </h4>
                                </div>
                        </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col"> Register Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">department </th>
                            <th scope="col"> mark </th>
                            <!-- <th scope="col"> image </th> -->

                           </tr> 
                        </thead>
                         <tbody>
                          
                            <?php 
                            $query="SELECT  name , department , mark, regno ,image FROM sabar ";
                            $result=$con->query($query);
                         if($result->num_rows > 0)
                        {
                            while ($row=$result->fetch_assoc())
                            {
                        ?>
                            <tr>
                          
                            <td><?php echo $row['regno']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['mark']; ?> </d>
                            <!-- <td>
                                <?php echo  "<img  src='data:image;base64, {$row['image']}' alt='img'>" ?>
                             </d> -->
                           

                            </tr>
                        <?php
                            }
                        }
                        else {
                            ?>

                            <tr>
                             <td colspan="6"> NO RECORDS FOUND</td>
                            </tr> 
                        <?php
                        }
?>
                        </tbody>
                         
                       
                        </table>
                      
</div>
</div>  
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


    <script>

    </script>


  </body>
</html>