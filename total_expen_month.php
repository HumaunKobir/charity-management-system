<?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
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
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script> <?php 
  include("admin/class/fonction.php");

  $obj= new adminLog();


  $results=$obj->display_expen_month(); 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
            <title>Found</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
     <style>
          .link a{
               text-decoration:none;
          }
     </style>
      <body> 
      
           <br /><br />  
           <div class="container">  
                <h3 class="link"  align="center"><a class="link" href="index.php">কুড়ালিয়া পটল মানবকল্যাণ সংগঠন এর  প্রত্যেক মাসের ব্যায় সমূহ</a></h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                     <thead>
                <tr>
                        <th>বছর</th>
                        <th>মাস</th>
                        <th>মোট ব্যায়ের টাকা</th>
                    </tr>
                </thead>
                    

                    <?php while($rows = mysqli_fetch_assoc($results)):?>

                    <tbody>
                    <tr>
                            <td><?php echo $rows['ynames']; ?></td>
                            <td><?php echo $rows['mnames']; ?></td>
                            <td><?php echo $rows['total_ex']; ?></td>
                            
                        </tr>
                    </tbody>
                    
                        <?php endwhile; ?>
                                        
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