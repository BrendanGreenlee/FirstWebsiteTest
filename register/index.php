<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
</style>
</head>
<body>
  <form action="/welcome" method = "post" style="text-align:center;">
    <input type="text" name="fname" placeholder="First name"><br>
    <input type="text" name="lname" placeholder="Last name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="password" name="passwordcopy" placeholder="Enter password again"><br>
    <input type="submit" value="Submit"><br>
    <input type="reset"><br>
  </form>
</body>

<?php
$servername = "localhost";
$username = "brendan";
$password = "Funfun96";
$dbname = "userpasscombos";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO combos (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // insert a row
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>

</html>
