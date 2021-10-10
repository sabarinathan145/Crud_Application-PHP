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
  <style>
    img{
    width: 109px;height: 89px;padding-left: 17px;
}
    </style>
  <div class="container">
     <div class="row">
         <div class="col-md-12 mt-4">
             <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Departmental Search student data </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form  action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                            <div class="form-group">
                         
                            <input type="text" name="get_id" class="form-control" placeholder="Enter ID value" Required><br>
                        </div>
                            <button type="submit" class="btn btn-outline-primary" name="search_by_id"> Search</button>                      
                            </form>
                        </div>
                    </div>
                        <?php
                          error_reporting(0);
                    $getid = $_POST['get_id'];
                        $conn=mysqli_connect('localhost','root','','student');

                if (!empty($getid))
                    {
                        if(isset($_POST['search_by_id']))
                        {
                        $id = $_POST['get_id'];                      
                        $query ="SELECT * FROM  sabar WHERE  sabar.regno='$id' OR sabar.department='$id' ";
                        //$result=mysqli_query($connection, $query)
                        $result=$conn->query($query);     
                        } 

                    }
                  
                   
                        ?>

                    <div class="table-responsive">
                   <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Register Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">department </th>
                            <th scope="col"> mark </th>
                            <!-- <th scope="col"> image </th> -->
                           </tr> 
                        </thead>
                         <tbody>
                         <?php 
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
                    <?php
                     //echo  "<img  src='data:image;base64, {$row['image']}' alt='img'>" 
                     ?>
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
                   <div class="col-ml-1">
                        <button type="submit" class="btn btn-outline-danger"  onClick="window.location.href=window.location.href"> close</button>
                        </div>        
                    </div>

                </div>
                </div>
             </div>
        </div>
    </div>
  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 
  </body>
</html>