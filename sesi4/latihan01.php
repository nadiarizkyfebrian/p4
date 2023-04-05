<?php
$usr="";
$ps="";
    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        $ps = $_GET["txpassword"];
    }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan metode GET</title>
</head>
<body>
    <form method="GET" action="latihan01.php">

        
        <div>
            User Name 
            <input type="text" name="txUSER" required>
        </div>

        <div>
            Password 
            <input type="password" name="txpassword" required>
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