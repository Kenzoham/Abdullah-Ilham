<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="assets/img/ideal.png" type="image/png">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins';
        }

        @media (max-width: 768px) {
            #scroll {
                overflow: scroll hidden;
            }
        }
    </style>
    <title>Ideal Weight Check</title>
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="container d-flex justify-content-center py-5">
            <div class="col-md-12 col-12 p-3 rounded-3 bg-white shadow">
                <?php
                require_once 'data.php';

                $daftarPengunjung = array(
                    1 =>
                    array(1, '2022-01-30', 'P001', 'Sultan', 'L', 69.8, 169, 24.7, 'Kelebihan Berat Badan'),
                    array(2, '2022-01-10', 'P002', 'Putri', 'P', 55.3, 165, 20.3, 'Normal (Ideal)'),
                    array(3, '2022-01-11', 'P003', 'Fauzan', 'L', 45.2, 171, 15.4, 'Kekurangan Berat Badan')
                );

                $submit = $_POST['submit'];
                $gender = $_POST['gender'];
                $nama = $_POST['nama'];
                $tmp_lahir = $_POST['tmp_lahir'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $berat = $_POST['berat'];
                $tinggi = $_POST['tinggi'];
                $email = $_POST['email'];

                $PengunjungBaru = new datapengunjung(count($daftarPengunjung) + 1, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat);
                $PengunjungBaru->data = $PengunjungBaru->nilai();

                array_push($daftarPengunjung, array($PengunjungBaru->id, $PengunjungBaru->tanggal, $PengunjungBaru->kode, $PengunjungBaru->nama, $PengunjungBaru->gender, $PengunjungBaru->berat, $PengunjungBaru->tinggi, $PengunjungBaru->data, $PengunjungBaru->status($PengunjungBaru->data)));
                echo "<h1 class='fw-bold text-center'>Skor anda adalah {$PengunjungBaru->data}</h1>";
                ?>

                <table class="example display nowrap table-striped table-bordered table" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Periksa</th>
                            <th>Kode Pengunjung</th>
                            <th>Nama Pengunjung</th>
                            <th>Gender</th>
                            <th>Berat (kg)</th>
                            <th>Tinggi (cm)</th>
                            <th>Nilai </th>
                            <th>Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($daftarPengunjung as $Pengunjung) {
                            echo "<tr>";
                            echo "<td>" . $Pengunjung[0] . "</td>";
                            echo "<td>" . $Pengunjung[1] . "</td>";
                            echo "<td>" . $Pengunjung[2] . "</td>";
                            echo "<td>" . $Pengunjung[3] . "</td>";
                            echo "<td>" . $Pengunjung[4] . "</td>";
                            echo "<td>" . $Pengunjung[5] . "</td>";
                            echo "<td>" . $Pengunjung[6] . "</td>";
                            echo "<td>" . $Pengunjung[7] . "</td>";
                            echo "<td>" . $Pengunjung[8] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
</body>

</html>