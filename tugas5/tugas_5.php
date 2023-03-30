

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .komentar{
        width: 3rem;
        text-transform: capitalize;
    }
</style>
<body class="p-4">
    <h1>Buku Tamu</h1>
    <p>komentar dan saran  anda sangat kami butuhkan untuk meningkatkan kualitas situs kami</p>
    <hr>
    <form action="insert.php"  method="post">
        <div class="card card-bordered col-6">
            <div class="card-inner p-5">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <label for="" class="form-label col-6">Nama Anda</label>
                        <input type="text" class="form-control col-6 " name="name" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6 d-flex align-items-center">
                        <label for="" class="form-label col-6">Email Anda</label>
                        <input type="text" class="form-control col-6 " name="email" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6 d-flex align-items-center">
                        <label for="" class="form-label col-6">Komentar Anda</label>
                        <textarea class="form-control col-6" id="" name="komentar" ></textarea>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <input type="submit" class="btn btn-primary" value="Kirim" style="margin-right:10px;">
                    <a href="list_komentar.php" class="btn btn-secondary">Batal</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>