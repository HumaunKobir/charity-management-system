<?php
  $conn=mysqli_connect('sql107.ezyro.com','ezyro_32404283','mk&12345','ezyro_32404283_charity');
?>



   
<?php
    $sqli="SELECT * FROM expension_tb Where yearss='2023' AND months='November'";
    $result=mysqli_query($conn, $sqli);
    $query ="SELECT SUM(money_ex) AS total_ex FROM expension_tb Where yearss='2023' AND months='November'";
    $query_result = mysqli_query($conn,$query);
    
  
?>
 
 <div class="mt-4">
 <h4>নভেম্বার ২০২৩ ব্যায় সমূহ</h4>

    <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <th>নং</th>
        <th>তারিখ</th>
        <th>সময়</th>
        <th>নাম/বিবরণ</th>
        <th>টাকা</th>
        
    </thead>
      
 <?php while($row=mysqli_fetch_assoc($result)):?>
   
    <tr>
        <td><?php echo $row["id"]?></td>
        <td><?php echo $row["date_ex"]?></td>
        <td><?php echo $row["time_ex"]?></td>
        <td><?php echo $row["name_ex"]?></td>
        <td><?php echo $row["money_ex"]?></td>
    </tr>
   
<?php endwhile;?>

<tfoot>
    <?php while($roq = mysqli_fetch_assoc($query_result)):?>
    <tr>
        <th>নং</th>
        <th>আয়ের তারিখ</th>
        <th>সময়</th>
        <th>মোট আয়</th>
        <th><?php echo $roq['total_ex'] ?></th>
      
                                            
    </tr>
     <?php endwhile;?>
</tfoot>
</table>
</div>


