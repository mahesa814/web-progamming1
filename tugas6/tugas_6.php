

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
                    <div class="col-8 d-flex align-items-center">
                        <label for="" class="form-label col-6">Nama</label>
                        <input type="text" class="form-control col-12 " name="name" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8 d-flex align-items-center">
                        <label for="" class="form-label col-6">Alamat</label>
                        <textarea class="form-control col-12" id="" name="address" ></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8 d-flex align-items-center">
                        <label for="" class="form-label col-6">Tempat Lahir</label>
                        <input type="text" class="form-control col-12" id="" name="place_of_birth"/>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8 d-flex align-items-center">
                        <label for="" class="form-label col-6">Tanggal Lahir</label>
                        <input type="date" name="date_of_birth" id="" class="form-control">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8 d-flex align-items-center">
                        <label for="" class="form-label col-6">Jenis Kelami</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check col-6">
                                <input class="form-check-input" type="radio" name="type_gender" id="type_gender1" value="L">
                                <label class="form-check-label" for="type_gender1">
                                    Laki Laki
                                </label>
                            </div>
                            <div class="form-check col-6">
                                <input class="form-check-input" type="radio" name="type_gender" id="type_gender2" value="P">
                                <label class="form-check-label" for="type_gender2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8 d-flex align-items-center">
                        <label for="" class="form-label col-6">Pendidikan</label>
                        <select name="education" id="" class="form-select col-12">
                            <option value="">Pilih pendidikan saat ini</option>
                            <option value="s1">S1</option>
                            <option value="smk">SMK</option>
                            <option value="smp">SMP</option>
                        </select>   
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