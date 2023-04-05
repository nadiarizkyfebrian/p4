<?php
$usr="";
$ps="";
$eusr="";
$eps="";
    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $ps = $_POST["txpassword"];

        if( $usr == ""){
            $eusr = "<div style='color: red';font-size: 9px;>User Name masih kosong</div>";
        }

        if( $ps == ""){
            $eps = "<div style='color: red';font-size: 9px;>Password masih kosong</div>";
        }
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan metode POST</title>
</head>
<body>
    <form method="POST" action="latihan02.php">

        
        <div>
            User Name 
            <input type="text" name="txUSER">
            <?=$eusr;?>
        </div>

        <div>
            Password 
            <input type="password" name="txpassword">
            <?=$eps;?>
        </div>

        <div>
            <button type="submit"> Login </button>
        </div>
    </form>
    <div>
        <pre>
            User Name: <?=$usr?>
            Password: <?=$ps?>
        </pre>
    </div>
        
</body>
</html>