<?php 


require 'function.php';
$get_komentar = "SELECT * FROM komentar";
$result = mysqli_query(connect(), $get_komentar);
if (mysqli_num_rows($result) > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);

} else {
    echo "Tidak ada data.";
}
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
        <div class="card card-bordered">
            <div class="card-header">
                <h4>Data Komentar</h4>
            </div>
            <div class="p-3">
                <a href="tugas_5.php" class="btn btn-info">Tambah Komentar</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Komentar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($row as $index => $komentars){ 
                            ?>
                            <tr>
                                <td><?= ++$index?></td>
                                <td><?= $komentars['name']?></td>
                                <td><?= $komentars['email']?></td>
                                <td><?= $komentars['komentar']?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>