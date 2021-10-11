<!DOCTYPE html>
<html>
<head>
        <meta charset="UTP-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Danh Bạ Điện Tử</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    </head>

<body>

<form action="process-upload.php" method="post" enctype="multipart/form-data">
    <div class="avatar" style="height:200px; width:200px">
        <img src="../IMG/avata1.jpg" alt="" class="img-fluid" id="avatar">
    </div>
Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="cập nhật ảnh đại diện" name="submit">
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="../js/myscript.js"></script>

</body>
</html>