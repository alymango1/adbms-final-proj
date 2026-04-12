<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $program = $_POST['program'];
    $address = $_POST['address'];
    $year_level= $_POST['year_level'];
    $section = $_POST['section'];
    $status = $_POST['status'];

    $sql = "UPDATE students 
            SET name='$name', email='$email', course='$course', program='$program', address='$address', year_level='$year_level', section='$section', status='$status'
            WHERE id=$id";

    if($conn->query($sql) === TRUE){
        echo "Updated Successfully";

        header("Location: read.php");
    }
}
?>
<head>
    <div class="head">
    <h1>Update Table</h1>
    <p>Update the existing record of this student</p>
    </div>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>

<div class="content">
<div class="form-wrap">
<form class="form" method="POST">
    
<label for="name">Name:</label>
<input type="text" id="name" name="name" value="<?php echo $row['name']; ?>">

<label for="email">Email:</label>
<input type="text" id="email" name="email" value="<?php echo $row['email']; ?>">

<label for="course">Course:</label>
<input type="text" id="course" name="course" value="<?php echo $row['course']; ?>">

<label for="program">Program:</label>
<input type="text" id="program" name="program" value="<?php echo $row['program']; ?>">

<label for="address">Address:</label>
<input type="text" id="address" name="address" value="<?php echo $row['address']; ?>">

<label for="year_level">Year Level:</label>
<input type="text" id="year_level" name="year_level" value="<?php echo $row['year_level']; ?>">

<label for="section">Section:</label>
<input type="text" id="section" name="section" value="<?php echo $row['section']; ?>">

<label for="status">Status:</label>
<input type="text" id="status" name="status" value="<?php echo $row['status']; ?>">

<input type="submit" name="update" value="Update" class="btn">
<a href="read.php" class="btn">Back</a>
</div>
</form>
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