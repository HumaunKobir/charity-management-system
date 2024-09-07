 
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
           <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর আয় সমূহ</a></h3>    
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                            <tr>
                                <th>নং</th>
                                <th>তারিখ</th>
                                <th>সময়</th>
                                <th>নাম/বিবরণ</th>
                                <th>টাকা</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require 'admin/dbcon.php';

                            $query = "SELECT * FROM found_tb ORDER BY date_m DESC";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $key=>$row)
                                {
                                    ?>
                                    <tr>
                                        <td><?= ++$key ?></td>
                                        <td><?= $row['date_m'] ?></td>
                                        <td><?= $row['time_t'] ?></td>
                                        <td><?= $row['name_dita'] ?></td>
                                        <td><?= $row['money_d'] ?></td>
                                        
                                       
                                        
                                        
                                    </tr>
                                    <?php
                                }
                            }
                            $query ="SELECT SUM(money_d) AS total_add FROM found_tb";
                            $query_result = mysqli_query($con,$query);
                            ?>
                            
                        </tbody>

                        <tfoot>
                            <?php while($roq = mysqli_fetch_assoc($query_result)):?>
                            <tr>
                                <th>নং</th>
                                <th>আয়ের তারিখ</th>
                                <th>সময়</th>
                                <th>মোট আয়</th>
                                <th><?php echo $roq['total_add'] ?></th>
                                                                 
                            </tr>
                            <?php endwhile;?>
                        </tfoot>
                                        
                                        
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