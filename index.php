<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA CUSTOMER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'conn.php';
                $query = mysqli_query($conn, "SELECT * FROM customer ORDER BY first_name ASC");
                ?>
                <center>
                    <h1>DATA CUSTOMER:</h1>
                </center>
                <a class="btn btn-info" style="margin-bottom:10px" href="tambah.php"><b>Tambah Customer</b></a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Phone
                        </th>
                        <th>
                            Address
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                            <tr>
                                <td> <?php echo $no ?></td>
                                <td> <?php echo $data["first_name"] . " " . $data["last_name"] ?> </td>
                                <td> <?php echo $data["email"] ?> </td>
                                <td> <?php echo $data["phone"] ?> </td>
                                <td> <?php echo $data["address"] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $data["id"] ?>" class="badge bg-warning" style="text-decoration: none;">Update</a>
                                    <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" class="badge bg-danger" style="text-decoration: none;">Delete</a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>