<!DOCTYPE html>
<html>
<head>
<title>View Customer Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>

<a href="viewmanager.php">View Manager</a></li>
<a href="viewadmin.php">View Admin </a></li>
<a href="viewstaff.php">View Staff </a></li>
<center><h1>CUSTOMER DETAILS</h1></center>
   <center>
 <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
     <tr>
 <th>#</th>
  <th>ID</th>
 <th>Name </th>
 <th>Age </th>
 <th>Address</th>
 <th>Date of birth</th>
 <th>Action</th>
 </tr>
 </thead>
 
<tbody>

<?php
include 'connect.php';
$sql=mysqli_query($db_con,"select * from costumer");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
											<td><?php echo htmlentities($row['id']);?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['age']);?></td>
                                            <td><?php echo htmlentities($row['address']);?></td>
											<td><?php echo htmlentities($row['dob']);?></td>
                                            <td>
                    
                    <a href="editchildren.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deletecustomer.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                                            <td>
                                            
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
								</center>
								
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
   
   
</body>
</html>

