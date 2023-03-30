<?php 


require 'function.php';
$get_komentar = "SELECT * FROM biodata";
$result = mysqli_query(connect(), $get_komentar);

    $data = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Komentar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="p-4">
        <div class="card card-bordered col-5">
            <div class="card-header">
                <h5>Data Registrasi</h5>
            </div>
            <div class="card-body">
                <div class="col-12">
                    <table class="table table-bordered">
                        <tr>
                            <td>Nama</td>
                            <td><?php echo $data['name'];?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><?php echo $data['address'];?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><?php echo $data['place_of_birth'];?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?= date('d, F Y', strtotime($data['date_of_birth']));?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?= $data['type_gender'] === 'P' ? 'Peremuan' : 'Laki Laki';?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td><?= $data['education'];?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>