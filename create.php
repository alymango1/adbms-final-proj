<?php
include 'db.php';
$message = "";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $program = $_POST['program'];
    $address = $_POST['address'];
    $year_level = $_POST['year_level'];
    $section = $_POST['section'];
    $status = $_POST['status'];

    $sql = "INSERT INTO students (name, email, course, program, address, year_level, section, status)
            VALUES ('$name', '$email', '$course', '$program', '$address', '$year_level', '$section', '$status')";

    if($conn->query($sql) === TRUE){
        $message = "Record Added Successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:wght@300..800&family=Mona+Sans:wght@200..900&family=Open+Sans:wght@300..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>

    <div class="head">
        <h1>Insert Page</h1>
        <p>Insert data on the textfields to add data on the Students table</p>
    </div>

    <?php if($message != ""): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>

    <div class="content">

        <div class="form-wrap">

            <h1>INSERT DATA IN STUDENTS TABLE</h1>

            <form class="form" method="POST">

                <label>Name:</label>
                <input type="text" name="name" required>

                <label>Email:</label>
                <input type="text" name="email">

                <label>Course:</label>
                <input type="text" name="course">

                <label>Program:</label>
                <input type="text" name="program">

                <label>Address:</label>
                <input type="text" name="address" required>

                <label>Year Level:</label>
                <input type="text" name="year_level">

                <label>Section:</label>
                <input type="text" name="section">

                <label>Status:</label>
                <input type="text" name="status" required>

                <input type="submit" name="submit" value="Save" class="btn">

                <a href="read.php" class="btn">View Table</a>

            </form>
        </div>

    </div>

</body>

<footer>
    <div class="footer">
        <ol>Members:</ol>
        <ul>
            <li>Jorge Andrei Fuertes</li>
            <li>Heraclea Recio</li>
            <li>Lovely Joy Alejo</li>
            <li>Czyrish Maralit</li>
            <li>Chriza Angela Cueva</li>
        </ul>
    </div>
</footer>

</html>