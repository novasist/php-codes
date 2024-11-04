<?php
/*
*Created by  Software Engineer: Sinan KAYAPINAR

* Date :18.10.2024
* Time :21:30
*/

?>
<!doctype html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Sinan Kayapınar">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>create data</title>
</head>
<body>
<div class="container">
    <h5>Kural Ekleme</h5>
    <form action="MacKisaYollarCopy.php" method="post">
        <div class="form-group">
            <label for="icon1">1.İcon Adı</label>
            <input type="text" class="form-control" id="icon1" name="icon1" value=""></input>
        </div>
        <div class="form-group">
            <label for="icon2">2.İcon Adı</label>
            <input type="text" class="form-control" id="icon2" name="icon2" value=""></input>
        </div>
        <div class="form-group">
            <label for="icon3">3.icon Adı</label>
            <input type="text" class="form-control" id="icon3" name="icon3" value=""></input>
        </div>
        <div class="form-group">
            <label for="exp">Açıklama</label>
            <input type="text" class="form-control" id="exp" name="exp" value=""></input>
        </div>
        <button class="btn btn-sm btn-primary px-5 mt-4">Ekle</button>
    </form>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
