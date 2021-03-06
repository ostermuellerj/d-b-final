<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h3>Enter information about a student to display courses:</h3>

    <form action="jdbc_student_courses.php" method="post">
        Student ID: <input type="text" name="id"><br>
        <input name="submit" type="submit">
    </form>
    <br>
    <h3>
        <a href="index.html">Return to homepage.</a>
    </h3>

</body>

</html>

<?php
if (isset($_POST['submit'])) {
    // replace ' ' with '\ ' in the strings so they are treated as single command line args
    $id = escapeshellarg($_POST[id]);

    $command = 'java -cp .:mysql-connector-java-5.1.40-bin.jar jdbc_student_courses ' . $id;

    // remove dangerous characters from command to protect web server
    $command = escapeshellcmd($command);
    // echo "<p>command: $command <p>";

    // run jdbc_insert_restaurant.exe
    system($command);
}
?>