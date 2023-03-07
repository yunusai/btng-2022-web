<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/todolist.png">
    <link rel="stylesheet" href="style/style.css">
    <title>Your Todolist</title>
</head>

<body>
    <?php
    require_once("connection.php");

    if (isset($_POST["submit"])) {
        $nama_tugas = $_POST["nama_tugas"];
        $deadline = $_POST["deadline"];

        $queryCreated = "INSERT INTO tugas_yunus(nama_tugas, deadline) VALUES ('$nama_tugas', '$deadline')";

        $created = mysqli_query($conn, $queryCreated);
    }

    if (isset($_GET['id_tugas'])) {
        $id = $_GET['id_tugas'];
        $delete = mysqli_query($conn, "DELETE FROM tugas_yunus WHERE id_tugas = $id");
    }


    ?>
    <!--Title-->
    <header class="bg-info mx-0 px-3 py-2">
        <img src="assets/todolist.png" class="navbar-brand" alt="yourlist">
        <a class="navbar-brand fw-bold fs-4 text-light" href="#">
            <span class="text-danger">Your</span>List
        </a>
    </header>
    
    <!-- Form Data -->
    <div class="container card mt-5 col-md-8">
        <div class="card-header fw-bold">Tambahkan Daftar Todolist mu</div>
        <div class="card-body">
            <form action="" method="post">
                <div class=" mb-3">
                    <label for="task" class="form-label">Tugas Kamu</label>
                    <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Deadline</label>
                    <input type="date" class="form-control" id="deadline" name="deadline" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- End Form Data -->

    <!-- Table -->
    <div class="container card mt-5 col-md-8">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Tugas</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $queryShow = "SELECT * FROM tugas_yunus ORDER BY deadline ASC"; // menampilkan data
                    $show = mysqli_query($conn, $queryShow);

                    if (mysqli_num_rows($show) > 0) {
                        $number = 1;
                        while ($data = mysqli_fetch_assoc($show)) {

                    ?>
                            <tr>
                                <td class="number"><?= $number; ?></td>
                                <td><?= $data["nama_tugas"]; ?></td>
                                <td><?= $data["deadline"]; ?></td>
                                <td class="action">
                                    <a href="edit.php?id_tugas=<?php echo $data["id_tugas"] ?>" class="btn btn-primary">Edit</a>
                                    <a href="index.php?id_tugas=<?php echo $data["id_tugas"] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php
                            $number++;
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="4">No Data Found</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table -->
    <footer align="center" class="bg-primary">
        Copyright &copy; Yunus Todolist 2022
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>