<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user'])){
    header("Location: login-db.php");
    exit();
}


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
        <button class="menu" onclick="openNav()" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></button>
        <h1>Insert Page</h1>
    </div>

    <div class="overlay" id="overlay" onclick="closeNav()"></div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar_head">
            <h1>Menu</h1>
            </div>
            <div class="sidebar_content">
            <hr>
            <a href="create.php"><button class="nav_btn">Create</button></a>
            <hr>
            <a href="read.php"><button class="nav_btn">Students</button></a>
            <hr>
            <br><br>
            </div>
            <div class="sidebar_footer">
            <a href="logout.php" class="nav_btn" id="logout_btn">Logout</a>
            </div>
        </div>

    <script>
        function openNav(){
            document.getElementById("sidebar").classList.add("active");
            document.getElementById("overlay").classList.add("active");
        }

        function closeNav(){
            document.getElementById("sidebar").classList.remove("active");
            document.getElementById("overlay").classList.remove("active");
        }
    </script>

    <?php if($message != ""): ?>
        <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>

    <div class="content">

        <div class="form-wrap">

            <h1>INSERT DATA IN STUDENTS TABLE</h1>

            <form class="form" method="POST">

                <label>Name:</label>
                <input type="text" name="name" pattern="[A-Za-z ]+" required>

                <label>Email:</label>
                <input type="text" name="email" required>

                <label>Course:</label>
                <input type="text" name="course" pattern="[A-Za-z0-9 ]+" >

                <label>Program:</label>
                <input type="text" name="program" pattern="[A-Za-z ]+" >

                <label>Address:</label>
                <input type="text" name="address" required pattern="[A-Za-z0-9.,-# ]+" required>

                <label>Year Level:</label>
                <input type="number" name="year_level" min="1" max="6" required >

                <label>Section:</label>
                <input type="number" name="section" min="1101" max="6500" >

                <label for="status">Status:</label>
<select id="status" class="btn" name="status" required>
    <option value="">-- Select Status --</option>
    <option value="Regular">Regular</option>
    <option value="Irregular">Irregular</option>
    <option value="Not Enrolled">Not Enrolled</option>
</select>

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