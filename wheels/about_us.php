<?php
//index.php
 $output = '';
 $connect = mysqli_connect("localhost", "root", "", "wheels");

 $query = "SELECT status FROM about_status ORDER BY status_id DESC limit 1";
 $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
       $output= $row['status'];
        echo $output;
    }
?>

 