<?php include 'conn.php'; ?>
<?php
     $id=$_GET['deleteid'];
     $sql="DELETE FROM CRUD WHERE id=$id";
     $result=mysqli_query($conn,$sql);
// $row=mysqli_fetch_assoc($result);
     if($result==true){
// echo "<script>alert('Data succesfully Deleted');</script>";
       header('location:view.php');
     }else{
    echo "<script>alert('can't delete');</script>";
}
?>