<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once("config/connection.php");

        if (isset($_POST["submit"])) { //["nama_dari_name"]
            $task = $_POST["nama_tugas"];
            $date = $_POST["deadline"];

            $query = "INSERT INTO tugas_yunus(nama_tugas, deadline) VALUES ('$nama_tugas', '$deadline')"; //INSERT INTO nama_table

            $created = mysqli_query($conn, $query);

            //Pengecekan
            if (!$created) {
                echo "Ada yang salah! Silahkan Perbaiki lagi!";
            }
    ?>

    <!--Form Data-->
    <div class="container card mt-5 col-md-6">
        <div class="card-header fw-bold mb-3 ">
            Tambah To-Do List
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kegiatan</label>
                    <input type="Text" class="form-control" id="nama_tugas" name="nama_tugas" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Waktu/Tanggal</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
            </form>
        </div>
    </div>
    <!--End Form Data-->

    <!--Table-->
    <div class="container card mt-5 col-md-6">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kegiatan</th>
                        <th scope="col">Waktu/Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryShow = "SELECT FROM tugas ORDER BY deadline ASC"; //Menampilkan Data
                    $show = mysqli_query($conn, $queryShow);

                    if (mysqli_num_rows($show) > 0) {
                        $number = 1;
                        while ($data = mysqli_fetch_assoc($show)) {
                    ?>
                            <tr>
                                <td><?= $number ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                </tbody>
            </table>
        </div>
<?php
                            $number++;
                        }else{
                            ?>
                           <tr>
                            <td colspan=3>No Data Found</td>
                           </tr> 
                        }
                    }

    </div>
    <!--End Table-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>