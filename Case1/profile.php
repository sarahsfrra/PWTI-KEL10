<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel = "stylesheet" href ="Assets/css/style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <title>PROFILE PAGE</title>
</head>
<body>
    <div class="container d-flex justify-content-center align-item-center">
        <div class="row">

        <div class="col-md-6 left-box p-5">
                <div class="image  p-5">
                    <img src="<?= $_SESSION["photo"]?>" class="img-fluid w-100 pb-4 rounded">
                    <h6>FILE BERHASIL DI UNGGAH
                    </h6>
                </div>
            </div>

            <div class="col-md-6 right-box p-5">
                <div class="row align-items-center">
                    <div class="text-center mt-2 mb-3">
                        <h4>DATA AKUN KAMU</h4>
                        <p>Informasi mengenai akunmu</p>
                    </div>

                    <div class=" result input-group ">
                        <p>Full Name : <?= $_SESSION["name"] ?></p>
                    </div>
                    
                    <div class="result input-group ">
                        <p>Email :  <?= $_SESSION["email"] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>