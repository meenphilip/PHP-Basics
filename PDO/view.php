 <?php
  require_once("Db.php");
  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>View Details</title>
   <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
 </head>

 <body>
   <div class="container mt-4">
     <div class="card border-danger bg-dark text-white">
       <div class="card-header">
         <h1 class="card-text text-center">Users Details</h1>
       </div>
       <div class="card-body">
         <div class="table-responsive">
           <table class="table table-light table-striped table-hover">
             <thead class="thead-light">
               <tr>
                 <th scope="col">SrNo.</th>
                 <th scope="col">Username</th>
                 <th scope="col">Name</th>
                 <th scope="col">Email</th>
                 <th scope="col">Password</th>
                 <th scope="col">Confirm PWD</th>
                 <th scope="col">Message</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <?php
                  global $conn;
                  $sql = "SELECT * FROM contact ORDER BY id desc";
                  $Execute = $conn->query($sql);
                  $SrNo = 0;
                  while ($DataRows = $Execute->fetch()) {
                    $userId = $DataRows["id"];
                    $UserName = $DataRows["username"];
                    $Name = $DataRows["name"];
                    $Email = $DataRows["email"];
                    $Password = $DataRows["password"];
                    $ConPwd = $DataRows["cpassword"];
                    $Message = $DataRows["message"];
                    $SrNo++;

                  ?>
                   <th scope="row"><?php echo htmlentities($SrNo); ?></th>
                   <td><?php echo htmlentities($UserName); ?></td>
                   <td><?php echo htmlentities($Name); ?></td>
                   <td><?php echo htmlentities($Email); ?></td>
                   <td><?php echo htmlentities($Password); ?></td>
                   <td><?php echo htmlentities($ConPwd); ?></td>
                   <td><?php echo htmlentities($Message); ?></td>
               </tr>
             </tbody>
           <?php  } ?>
           </table>
         </div>
       </div>
     </div>
   </div>
   <script src="../bootstrap4/js/jquery-3.5.1.min.js"></script>
   <script src="../bootstrap4/js/bootstrap.bundle.min.js"></script>
 </body>

 </html>