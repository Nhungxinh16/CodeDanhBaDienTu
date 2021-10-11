<?php
    session_start();
    $manv=$_SESSION['manv'];

    include("../config/constants.php");
   

   if(isset ($_GET['update']))
   {
        $tenNV  = $_GET['txthoten'];
        $chucvu = $_GET['txtchucvu'];
        $email  = $_GET['txtemail'];
        $sodidong = $_GET['sodidong'];
        $madv = $_GET['sltMaDV'];

        if($tenNV == NULL || $chucvu == NULL || $email == NULL || $sodidong == NULL || $madv == NULL){
            $_SESSION["add_error"] = "Hãy nhập đủ thông tin";
            header("Location: sua.php?manv=$manv");
        }else{
            //lệnh truy vấn sql để update
            $sql = "UPDATE db_nhanvien SET
            tennv='$tenNV',
            chucvu='$chucvu',
            sodidong= '$sodidong',
            email='$email',
            madv= '$madv' WHERE manv= '$manv'";

            //thưc hiện truy vấn đối vs csdl
            $query = mysqli_query($conn, $sql); 

            if((mysqli_query($conn, $sql))==TRUE)
            {
                $_SESSION['update']="<div class='text-success'>Sửa nhân viên thành công.</div>";

                header('location:index.php');
            }
            else
            {
                $_SESSION['update']="<div class='text-danger'>Sửa nhân viên thất bại.</div>";
                header('location:index.php');
        
            }
            mysqli_close($conn);
        }

        

   }
?>
