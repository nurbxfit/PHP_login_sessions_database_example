<?php
    include_once('session.php');
    include('m_info.php');
    include('insert.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Your Home Page</title>
       
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="resources/js/jquery.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse" >
            <div class='container-fluid'>
                <div class='navbar-header'>
                    <b>Welcome: <i><?php echo $login_session; ?></i> </b>
                </div>
                <ul class='nav navbar-nav navbar-right'>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>
            </div>
        </nav>

        <div class='container'>
            <?php if(!empty($_SESSION['success'])) {
                    $message = $_SESSION['success'];
                    echo '<div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>'.$message.'</strong>
                  </div>';
            }
            if(!empty($_SESSION['error'])){
                $error_message = $_SESSION['error'];
                echo '<div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>'.$error_message.'</strong>
              </div>';
            }
            ?>
            <form class='form-control-group' method='POST' action="">
                <div class='form-group'> 
                    <label> Military Numbers </label>
                    <select name='military_number' class='selectpicker form-control' data-show-subtext='true' data-live-search='true'>
                        <option>NONE</option>
                        <?php
                            foreach ($numbers as $number)
                            {
                                echo " <option value=".$number.">".$number."</option> " ;
                            }
                        ?>
                    </select>
                    
                    <label>Name</label>
                    <input id='nama' name='nama' type='text' placeholder='Nama' class="form-control">
                   
                    <label>Date</label>
                    <input name='date' type='date'class="form-control">
                    <label>time in</label>
                    <input name='time_in' step='1' type='time'class="form-control">
                    <label>time out</label>
                    <input name='time_out' step='1' type='time'class="form-control">

                    <input id='idNo' type='hidden' name='idNo' class='form-control'>
                    <input id='id'type='hidden' name='id' class='form-control'>
                </div>
                <button type='submit' name='submit' value='insert' class='btn btn-primary'>Submit</button>
            </form>
        </div>
    </body>

    <script>
        $(document).ready(function(){
            $('.selectpicker').change(function(){
                var selectedItem = '';
                var array = <?php echo json_encode($users)?> ;
                $('.selectpicker option:selected').each(function(){
                    selectedItem = parseInt($(this).text());
                });
                array.forEach(element => {
                    var id = parseInt(element.NoTentera);
                    if(id === selectedItem)
                    {
                        
                        $('#nama').val(element.name);
                        $('#idNo').val(element.idNo);
                        $('#id').val(element.id);
                    }    
                });
            })
        });
    </script>
</html>