<?php
session_start();

// Jewand Graham Jr.
// Week 5 Performance Assessment

$storedName = isset($_COOKIE["name"]) ? $_COOKIE["name"] : "No name stored";

$storedDOB = isset($_SESSION["dob"]) ? $_SESSION["dob"] : "No birthdate stored";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jewand Graham Jr. Wk 5 Performance Assessment</title>
</head>

<body>

<h2>
    The Name in the Cookie is:
    <?php echo htmlspecialchars($storedName); ?>
</h2>

<h2>
    The Birthdate in the Session is:
    <?php echo htmlspecialchars($storedDOB); ?>
</h2>

<br>

<a href="data_entry.php">Back to Data Entry Page</a>

</body>
</html>