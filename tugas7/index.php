<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7 || Pertemuan 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="p-3">
        <div class="card card-bordered col-6">
            <div class="card-header">
                <h5>Rumus Rumus</h5>
            </div>  
            <div class="card-body">
                <form action="insert.php" method="post">
                    <div>
                        <label for="form-label">Nilai 1</label>
                        <input type="number" name="nilai1" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="form-label">Nilai 1</label>
                        <input type="number" name="nilai2" class="form-control">
                    </div>
                    <div class="mt-3">
                        <label for="" class="form-label col-6">Rumus</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" name="rumus" id="type_gender1" value="segitiga">
                                <label class="form-check-label" for="type_gender1">
                                    Segitiga
                                </label>
                            </div>
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="rumus" id="type_gender2" value="pj">
                                <label class="form-check-label" for="type_gender2">
                                    Persegi Panjang
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Hitung</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>