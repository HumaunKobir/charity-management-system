 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Manob Kollan</title>
           <link rel="icon" type="image/png" href="assets/images/favicon.ico">
             <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
            <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
            <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
            <link rel="manifest" href="assets/images/site.webmanifest">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body> 
      <style>
          .link a{
               text-decoration:none;
          }
     </style> 
           <br /><br />  
           <div class="container">  
           <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর সদস্যে তালিকা</a></h3>    
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                            <tr>
                                <th>নং</th>
                                <th>নাম</th>
                                <th>গ্রাম/মহল্লা</th>
                                <th>মোবাইল নাম্বার</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require("admin/dbcon.php");

                            $query = "SELECT * FROM students ORDER BY id DESC";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $key=>$row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= ++$key ?></td>
                                        <td><?= $row['name_m'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><a href="tel:+88<?= $student['phone'] ?>"><?= $row['phone'] ?></a></td>
                                        
                                       
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            
                        </tbody>
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> 