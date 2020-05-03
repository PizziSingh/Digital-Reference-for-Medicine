<?php
    include('php/include/config.php');      
    if(isset($_POST['query']))
    {
        $output="";
        $query = $_POST['query'];
        $sql="select med_name,med_id,manufacturer from medicine_info where med_name LIKE  '%".$query."%'";
        //echo $sql."<br/>";
        $output='<ul class="list-group" >';
        if($result=mysqli_query($conn,$sql))
        {
            
            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_array($result))
                {
                    $output.="<li class='list-group-item' value=".$row['med_id'].">".$row['med_name']." | ".$row['manufacturer']."</li>";

                }
            }
            else
            {
                $output.="<li class='list-group-item'>Medicine Not Found</li>";

            }
            $output.="</ul>";
            echo $output;
        }

        
    } 
?>