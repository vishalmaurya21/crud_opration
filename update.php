<?php include 'conn.php';
     $id=$_GET['updateid'];
     $sql="SELECT * FROM CRUD WHERE ID = '$id'";
     $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_assoc($result);


     $name=$row['name'];
     $email=$row['email']; 
     $pass=$row['password'];
     $gender=$row['gender'];

     if(isset($_POST['update'])){
             $name=$_POST['name'];
             $email=$_POST['email']; 
             $password=$_POST['password'];
             $gender=$_POST['gender'];
    
             $sql="UPDATE Crud SET name='$name',email='$email',password='$password',gender='$gender' where id='$id'";

                     $result=mysqli_query($conn,$sql);
                     if($result){
                         echo "<script>alert('Data Updated');</script>";
                         header('location:view.php');
                     }else{
                         echo "<script>alert('can not Update');</script>";     
   }
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login form</title>
    <style>* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Overall body styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}.container {
    background-color: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}
</style>
</head>
<body>
<div class="container">
    
       <center>
        <form action="" method="Post">
            <label for="">Name:</label>
            <input type="text" name="name" id="name" value=<?php echo $name?>><br>

            <label for="">E-Mail:</label>
            <input type="text" name="email" id="email" placeholder="abc@gmail" value=<?php echo $email ?>><br>

            <label for="">Password:</label>
            <input type="password" name="password" id="password" value=<?php echo $pass ?>><br>

            <label for="">Gender:</label>
            <select name="gender" id="gender" value=<?php echo $gender ?>>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select><br>

            <button value="update" name="update" id="update">Update</button>
            <button>
                <a href="index.php">Home</a>
            </button>
            
        </form>
        </center>
    </div>
</body>
</html>
