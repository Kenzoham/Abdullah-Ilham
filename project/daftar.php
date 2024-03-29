<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/ideal.png" type="image/png">
    <title>
        Ideal Weight Check
    </title>
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="container d-flex justify-content-center py-5">
            <div class="col-md-8 col-12 p-3 rounded-3 bg-white shadow">
                <div class="edukasi">
                    <h1>Ideal <span class="text-primary">Weight Check</span></h1>
                    <br/>
                    <p>
                    Ideal Weight Check merupakan sebuah apilkasi yang membantu anda untuk mnegetahui bagaimana kondisi tubuh anda,
                    entah itu ideal, kurus, atau obesitas. Aplikasi ini sangat mudah digunakan kalian hanya perlu memasukan data diri
                    pada form di bawah.
                    <span>Data yang anda masukan 100% aman.</span>
                    </p>
                </div>
                <br/>
                <br/>
                <form action="hasil.php" method="post">
                    <div class="mb-3">
                        <p class="fw-bold text-center">Pilih jenis kelamin anda</p>
                        <div class="row justify-content-evenly">
                            <div class="col-md-4 col-6 m-0">
                                <div class="form-check form-check-inline m-0 p-0 w-100">
                                    <input class="gambar form-check-input d-none" type="radio" name="gender" id="image1" value="L" checked>
                                    <label class="card" id="image" for="image1">
                                        <div class="card-body text-center rounded-3" id="imageCard">
                                            <img src="assets/img/laki.png" width="100%" alt="" draggable="false" >
                                            <div class="laki">
                                            <h3>Laki-laki</h3>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 col-6 m-0">
                                <div class="form-check form-check-inline m-0 p-0 w-100">
                                    <input class="gambar form-check-input d-none" type="radio" name="gender" id="image2" value="P">
                                    <label class="card" id="image" for="image2">
                                        <div class="card-body text-center rounded-3" id="imageCard">
                                            <img src="assets/img/perempuan.png" width="100%" alt="" draggable="false">
                                            <h3 color="pink">Perempuan</h3>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6 col-12">
                            <p class="fw-bold">Siapa nama anda?</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="nama" name="nama" type="text" class="form-control" value="" placeholder="Masukan Nama anda" aria-label="Nama" aria-describedby="basic-addon1" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6 col-12">
                            <p class="fw-bold">Dimana tempat lahir anda?</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="tmp_lahir" name="tmp_lahir" type="text" class="form-control" value="" placeholder="Kota kelahiran anda" aria-label="Kota kelahiran anda" aria-describedby="basic-addon2" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6 col-12">
                            <p class="fw-bold">Kapan tanggal lahir anda?</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" value="" placeholder="Tanggal lahir" aria-label="Tanggal Lahir" aria-describedby="basic-addon3">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6 col-12">
                            <p class="fw-bold">Apa email anda?</p>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="email" name="email" type="email" class="form-control" value="" placeholder="Masukan email pribadi" aria-label="Email" aria-describedby="basic-addon4" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6 col-12">
                            <p class="fw-bold">Berapa berat anda ?<span>*dalam kg</span></p>
                            <div class="form-group row">
                                <div class="input-group">
                                    <input id="berat" name="berat" type="number" min="0" step="0.01" class="form-control" value="" placeholder="Berat anda" aria-label="Berat" aria-describedby="basic-addon5" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 col-md-6 col-12">
                            <p class="fw-bold">Berapa tinggi anda?<span>*dalam cm</span></</p>
                            <div class="form-group row">
                                <div class="input-group">
                                    <input id="tinggi" name="tinggi" type="number" min="0" class="form-control" value="" placeholder="Tinggi anda" aria-label="Tinggi" aria-describedby="basic-addon6" oninput="this.value = !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pengingat">
                        <br/>
                        <p>Apakah anda sudah yakin ingin mengcek keidealan tubuh anda?</P>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="form-group col-md-auto col-12 ">
                            <input type="submit" class="btn btn-primary w-100" value="Ya, saya yakin" name="submit">
                        </div>
                        <div  class="form-group col-md-auto col-12 ">
                            <input type="reset" class="btn btn-danger w-100" value="tidak, batalkan!">
                         </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>