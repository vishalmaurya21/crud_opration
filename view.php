<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Student login Data</title>
</head>
<body>

    <table border=1px >
        <thead>             
                <th colspan=7>Student Data</th>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Gender</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
 <?php 
     $query="Select* from crud";
     $result=mysqli_query($conn,$query);
     while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $pass=$row['password'];
        $gender=$row['gender'];


        echo '<tr>
                 <th scope="row">'.$id.'</th>
                 <td>'.$name.'</td>
                 <td>'.$email.'</td>
                 <td>'.$pass.'</td>
                 <td>'.$gender.'</td>
                 <td><button><a href="update.php?updateid='.$id.'">Update</a></button>
                     <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
                 </td>
             </tr>';
        
     }   
?>
        </tbody>
    </table>
</body>
</html>
