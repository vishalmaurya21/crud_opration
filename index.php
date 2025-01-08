<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style.css">
    <title>Student Login Form</title>
    <style>
      /* Reset some default browser styles */
* {
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
}

/* Container styling */
.container {
    background-color: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

/* Header Styling */
h1 {
    color: #4CAF50;
    margin-bottom: 20px;
}

/* Form elements styling */
form {
    display: flex;
    flex-direction: column;
}

/* Input fields */
input[type="text"],
input[type="email"],
input[type="password"],
select {
    padding: 12px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ddd;
    font-size: 16px;
    outline: none;
}

/* Focus effect on input fields */
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
select:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
}

/* Submit button styling */
button[type="submit"],
button {
    padding: 12px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
    margin-bottom: 10px;
}

button[type="submit"]:hover,
button:hover {
    background-color: #45a049;
}

a.button {
    text-decoration: none;
    color: white;
}

a.button:hover {
    background-color: #0056b3;
}

/* Styling for select dropdown */
select {
    background-color: #fff;
    border: 1px solid #ddd;
}

/* Gender dropdown icon */
select option {
    padding: 10px;
}
    </style>
</head>
<body>
    <div class="container">
      <h1>Login Form</h1>
        <form action="" method="post">
               <div>
                  <label for="name-input"><i class="fa-solid fa-user"></i></label>
                  <input type="text" name="name" id="name" placeholder="Username" required><br><br>
                </div>
                <div>
                  <label for="mail-input"><i class="fa-solid fa-envelope"></i></label>
                  <input type="email" name="email" id="email" placeholder="abc@gmail.com" required><br><br>
                </div>
                <div> 
                  <label for="password-input"><i class="fa-solid fa-key"></i></label>
                  <input type="password" name="password" id="password" placeholder="Password" required><br><br>
                </div>
                <div>
                  <label for="gender"><i class="fa-solid fa-person-half-dress"></i> </label>
                  <select name="gender" id="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="custom">Custom</option>
                  </select><br>
                </div>
                  <button type="submit" name="submit" id="btn-submit">Submit</button>
                  <button><a href="view.php" class="button">View</a></button>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

    $insertquery = "INSERT INTO crud (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";
    $data = mysqli_query($conn, $insertquery);
    if($data){
        header('Location: index.php');
    } else {
        echo "<script>alert('Try again')</script>";
    }
}
?>