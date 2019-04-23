<?php
    include('session.php');
    $name = $military_number = $date = $time_in = $time_out = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = validate_input($_POST["nama"]);
        $military_number = validate_input($_POST["military_number"]);
        $date = validate_input($_POST["date"]);
        $time_in = validate_input($_POST["time_in"]);
        $time_out = validate_input($_POST["time_out"]);
        $id = validate_input($_POST['id']);
        $idNo = validate_input($_POST['idNo']);

        $work_hour = ((int) $time_out) - ((int) $time_in) ;
      }
      
      function validate_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    $insertQuery = 'INSERT INTO `recorddata_in_out` (idNo,NoTentera,name,date,in_time1,out_time2,work_hour) 
                    VALUES ('.$idNo.','.$military_number.',"'.$name.'","'.$date.'","'.$time_in.'","'.$time_out.'","'.$work_hour.'")';
    
    if( mysqli_query($db,$insertQuery) ){
       
        header('location:profile.php');
    }
    else{
        echo "Error Inserting Data:" . mysqli_error($db);
    }
    mysqli_close($db);
    
?>