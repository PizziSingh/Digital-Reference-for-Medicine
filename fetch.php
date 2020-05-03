<?php
    include('php/include/config.php');      
    if(isset($_POST['query']))
    {
        
        $query = $_POST['query'];
        $sql="select med_name,med_id,manufacturer from medicine_info where med_name LIKE  '%".$query."%'";
        //echo $sql."<br/>";
        
        if($result=mysqli_query($conn,$sql))
        {
            
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_array($result))
                {
                   $output["id"]=$row["med_id"];
                   $output["name"]=$row["med_name"];
                   $output["mnfctr"]=$row["manufacturer"];
                   echo json_encode($output);
                }
            }
            else
            {
                $err["error"]="Record not found";
                echo json_encode($err);

            }
            
        }
        
    } 
?>
