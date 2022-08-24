<?php
   include('security.php');
   require "database/dbconfig.php";
   ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yr 10 IST</title>
</head>
<body>
   <!-- Made by Cooper Marino-->
    <h1>Yr 10 IST</h1>
    <?php ?>
    <style type="text/css"> 
    .tg {
        border-collapse:collapse;
        border-spacing:0;
        width: 90%;
    }
    .tg td{
        border-color:black;
        border-style:solid;
        border-width:1px;
        font-family:Arial, sans-serif;
        font-size:14px;
        overflow:hidden;
        padding:10px 5px;
        word-break:normal;
    }
    .tg th{
        border-color:black;
        border-style:solid;
        border-width:1px;
        font-family:Arial, sans-serif;
        font-size:14px;
        font-weight:normal;
        overflow:hidden;
        padding:10px 5px;
        word-break:normal;
    }
    .tg .tg-0lax{
        text-align:center;
        vertical-align:top
    }
    input{
        width: 70px;
    }
 </style>
    <form method="POST" action="" enctype="multipart/form-data">
        <h3>User: <input type="text" name="user" required=""></h3>
        
        <table class="tg">
            <thead>
                <tr>
                    <th class="tg-0lax">Frame 1:</th>
                    <th class="tg-0lax">Frame 2:</th>
                    <th class="tg-0lax">Frame 3:</th>
                    <th class="tg-0lax">Frame 4:</th>
                    <th class="tg-0lax">Frame 5:</th>
                    <th class="tg-0lax">Frame 6:</th>
                    <th class="tg-0lax">Frame 7:</th>
                    <th class="tg-0lax">Frame 8:</th>
                    <th class="tg-0lax">Frame 9:</th>
                    <th class="tg-0lax">Frame 10:</th>
                    <th class="tg-0lax">Final Score:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="tg-0lax"><input type="number" name="frame1" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame2" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame3" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame4" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame5" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame6" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame7" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame8" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame9" required=""></td>
                    <td class="tg-0lax"><input type="number" name="frame10" required=""></td>
                    <td class="tg-0lax"><input type="number" name="Final" required=""></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" name="scoresubmit" class="btn btn-outline-primary">Submit Scores</button>
    </form>
<?php 
    if(isset($_POST['scoresubmit'])){
        $user = $_POST['user'];
        $frame1 = $_POST['frame1'];
        $frame2 = $_POST['frame2'];
        $frame3 = $_POST['frame3'];
        $frame4 = $_POST['frame4'];
        $frame5 = $_POST['frame5'];
        $frame6 = $_POST['frame6'];
        $frame7 = $_POST['frame7'];
        $frame8 = $_POST['frame8'];
        $frame9 = $_POST['frame9'];
        $frame10 = $_POST['frame10'];
        $final = $_POST['Final'];
        echo "submitted";
        $query = "INSERT INTO `Games`(`user`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `final`) VALUES ('$user','$frame1','$frame2','$frame3','$frame4','$frame5','$frame6','$frame7','$frame8','$frame9','$frame10','$final')";
        $result = mysqli_query($connect, $query);

    }
?>
</body>
</html>
