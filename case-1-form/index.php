<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel = "stylesheet" href ="Assets/css/style2.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <title>LOGIN PAGE</title>
    <?php include 'includes/header.php'?>
</head>
<body>
    <div class="container d-flex justify-content-center align-item-center">
        <div class="row">

        <div class="col-md-6 left-box p-5">
                <div class="image  p-5">
                    <img src="Assets/img/PIC1.png" class="img-fluid w-100 pb-4 rounded">
                    <h4>Registrasi Akunmu di DecaVision
                    </h4>
                </div>
            </div>

            <div class="col-md-6 right-box p-5">
                <form class="row align-items-center" method="post" action="submit.php" enctype="multipart/form-data">
                    <div class="header-text text-center mt-2 pb-2">
                        <h4>REGISTRASI AKUN</h4>
                        <p>Silahkan isi form untuk melanjutkan</p>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" name="nama" placeholder="Full Name" >
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" name="email" placeholder="Email Address" >
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" name="password" placeholder="Password" >
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control form-control-lg bg-light fs-6" name="photo" placeholder="Password" >
                    </div>

                    <div class="input-group mb-3 d-flex justify-content-between">
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6" type="submit">SUBMIT</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
<?php include 'includes/footer.php'?>
</html>