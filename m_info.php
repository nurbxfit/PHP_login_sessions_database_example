<?php
    
    $military_numbers = mysqli_query($db, 'SELECT `id`,`idNo`,`NoTentera`, `name` FROM `registerdata`');
    $numbers = array();
    $users = array();
    while($row = $military_numbers->fetch_assoc())
    {   
        $user = [ $row['NoTentera'] => $row['name']];

        array_push($users,$row);
        array_push($numbers,$row['NoTentera']);
    }
    //echo "Users:". json_encode($users);
    mysqli_close($db);
?>