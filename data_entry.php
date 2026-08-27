<?php
session_start();

// Jewand Graham Jr.
// Week 5 Performance Assessment

// Store submitted information
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Store name in a cookie
    if (isset($_POST["name"])) {
        $name = $_POST["name"];

        // Cookie will last for 30 days
        setcookie("name", $name, time() + (86400 * 30), "/");

        // Makes the new cookie value available immediately
        $_COOKIE["name"] = $name;
    }

    // Store date of birth in the session
    if (isset($_POST["dob"])) {
        $_SESSION["dob"] = $_POST["dob"];
    }
}

// Get stored values
$storedName = isset($_COOKIE["name"]) ? $_COOKIE["name"] : "";
$storedDOB = isset($_SESSION["dob"]) ? $_SESSION["dob"] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jewand Graham Jr. Wk 5 Performance Assessment</title>
</head>

<body>

<h2>Store your name in a cookie and birthdate in the Session</h2>

<form method="post" action="data_entry.php">

    <p>
        <strong>Name:</strong>
        <input
            type="text"
            name="name"
            value="<?php echo htmlspecialchars($storedName); ?>"
        >
    </p>

    <p>
        <strong>Date of Birth:</strong>
        <input
            type="text"
            name="dob"
            value="<?php echo htmlspecialchars($storedDOB); ?>"
        >
    </p>

    <p>
        <input type="submit" value="Submit">
    </p>

</form>

<br>

<a href="data_display.php">Show Data Display Page</a>

</body>
</html>