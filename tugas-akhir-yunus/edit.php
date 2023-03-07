<?php
include "connection.php";
$sql = mysqli_query($conn, "Select * from tugas_yunus where 
id_tugas='$_GET[id_tugas]'");
$data = mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="assets/ToDo list.png">
    <link rel="stylesheet" href="style/style.css">
    <title>Update Todolist</title>
</head>

<body>
    <!--Title-->
    <header>
        <div class="bg-info mx-0 px-3 py-2">
            <img src="assets/todolist.png" class="navbar-brand" alt="yourlist">
            <a class="navbar-brand fw-bold fs-4 text-light" href="#">
                <span class="text-danger">Your</span>List
            </a>
        </div>
    </header>

    <div class="container card mt-5 col-md-8">
        <div class="card-header fw-bold">Update Todolist Kamu</div>
        <div class="card-body">

            <form action="" method="post">
                <table>
                    <div class="mb-3">
                        <label for="task" class="form-label">Nama Tugas</label>
                        <input type="text" class="form-control" name="nama_tugas" value="<?php echo $data['nama_tugas']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Deadline</label>
                        <input type="date" class="form-control" name="deadline" size="30" value="<?php echo $data['deadline']; ?>">
                    </div>
                    <input type="submit" value="Update" name="proses" class="btn btn-primary">
                </table>
            </form>
        </div>
    </div>
    <footer align="center" class="bg-primary">
        Copyright &copy; Yunus Todolist 2022
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
<?php

if (isset($_POST['proses'])) {

    mysqli_query($conn, "update tugas_yunus set
    nama_tugas = '$_POST[nama_tugas]',
    deadline = '$_POST[deadline]' where id_tugas='$_GET[id_tugas]'") or die(mysqli_error($conn));

    echo "<script>document.location='index.php'</script>";
}

?>