<?php
    include('session.php');
    include('m_info.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Your Home Page</title>
       
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="profile">
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
            <b id="logout"><a href="logout.php">Log Out</a></b>
        </div>
        <div class='container'>
            <form class='form-control-group' method='POST' action="insert.php">
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
                <button type='submit' class='btn btn-primary'>Submit</button>
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