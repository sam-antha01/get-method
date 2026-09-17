<?php
$name = $_GET['samanthanga'] ?? 'Guest';
$age = $_GET['2004'] ?? 'Not provided';
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP GET Method</title>
</head>
<body>

    <h1>Student Information</h1>

    <form method="GET" action="">
        <label>Name:</label>
        <input type="text" name="name" required>

        <br><br>

        <label>Age:</label>
        <input type="number" name="age" required>

        <br><br>

        <button type="submit">Submit</button>
    </form>

    <hr>

    <h2>Submitted Information</h2>

    <p>Name: <?php echo htmlspecialchars($name); ?></p>
    <p>Age: <?php echo htmlspecialchars($age); ?></p>

</body>
</html>
