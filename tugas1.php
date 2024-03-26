<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Profile User </title>
</head>
<body>
    <h1> Welcome! <span style="font-weight: normal;"> to My Website </span> </h1>

    <img src="https://png.pngtree.com/png-clipart/20230305/original/pngtree-muslim-boy-profile-photo-png-image_8973295.png" 
    alt="Profile" width="200" height="200">
</body>
</html>




<?php

$nama="Muhammad Akbar Mustajabah ";
$alamat="Samarinda ULU ";
$email='risbar178@gmail.com';
$nomor='081253974826';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
            background-image: url(https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvcm00NTItZi0wMTQuanBn.jpg);
        }
    </style>
</head>
<body>
    <h1> About Me </h1>
    <h5> Nama: <span style="font-weight: normal;"> <?php echo $nama ?> <span/></h5>
    <h5> Alamat: <span style="font-weight: normal;"> <?= $alamat ?> <span/></h5>
    <h5> Email: <span style="font-weight: normal;"> <?= $email ?> <span/> </h5>
    <h5> Nomor Telpon: <span style="font-weight: normal;"> <?= $nomor ?> <span/> </h5>
    <hr>
</body>
</html>
