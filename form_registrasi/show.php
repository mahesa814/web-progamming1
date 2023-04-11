<?php

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tanggal = $_POST['tgl'];
$bln = $_POST['bln'];
$tahun = $_POST['tahun'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$kuasa = $_POST['kuasa'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="p-5">
        <div class="card card-inner col-6">
            <div class="card-header">
                <h5>Biodata</h5>
            </div>
            <div class="card-body">`
                <div class="col-12">
                    <label class="form-label col-md-4">Nama</label> :
                    <span>
                        <?= $nama ?>
                    </span>
                </div>
                <div class="col-12">
                    <label class="form-label col-md-4">Nim</label> :
                    <span>
                        <?= $nim ?>
                    </span>
                </div>
                <div class="col-12">
                    <label class="form-label col-md-4">Tanggal Lahir</label> :
                    <span>
                        <?= $tanggal . ' - ' . $bln . ' - ' . $tahun ?>
                    </span>
                </div>
                <div class="col-12">
                    <label class="form-label col-md-4">Alamat</label> :
                    <span>
                        <?= $alamat ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="card card-inner col-6 mt-2">
            <div class="card-header">
                <h5>User Account</h5>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <label class="form-label col-md-4">Username</label> :
                    <span>
                        <?= $username ?>
                    </span>
                </div>
                <div class="col-12">
                    <label class="form-label col-md-4">Email</label> :
                    <span>
                        <?= $email ?>
                    </span>
                </div>
                <div class="col-12">
                    <label class="form-label col-md-4">Password</label> :
                    <span>
                        <?= $password ?>
                    </span>
                </div>
            </div>
        </div>
        <div class="card card-inner col-6 mt-2">
            <div class="card-header">
                <h5>Yang Dikuasai</h5>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <label class="form-label col-md-4">Yang dikuasai</label> :
                    <span>
                        <?= implode(',', $kuasa) ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>