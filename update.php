<?php
include 'db.php';

session_start();

if (!isset($_SESSION['user'])){
    header("Location: login-db.php");
    exit();
}

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
    <title>Update Table</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
     <div class="head">
        <button class="menu" onclick="openNav()" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></button>
        <h1>Update Table</h1>
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
    
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>

                <div class="content">
                <div class="form-wrap">
                <form class="form" method="POST">
                    
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"
                value="<?php echo $row['name']; ?>"
                pattern="[A-Za-z ]+" required>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email"
                value="<?php echo $row['email']; ?>"
                required>

                <label for="course">Course:</label>
                <input type="text" id="course" name="course"
                value="<?php echo $row['course']; ?>"
                pattern="[A-Za-z0-9 ]+">

                <label for="program">Program:</label>
                <input type="text" id="program" name="program"
                value="<?php echo $row['program']; ?>"
                pattern="[A-Za-z ]+">

                <label for="address">Address:</label>
                <input type="text" id="address" name="address"
                value="<?php echo $row['address']; ?>"
                pattern="[A-Za-z0-9.,-# ]+" required>

                <label for="year_level">Year Level:</label>
                <input type="number" id="year_level" name="year_level"
                value="<?php echo $row['year_level']; ?>"
                min="1" max="6"required>

                <label for="section">Section:</label>
                <input type="number" name="section" min="1101" max="6500"
                value="<?php echo $row['section']; ?>">

                <label for="status">Status:</label>
                <select id="status" class="btn" name="status" required>
                    <option value="Regular" <?php if($row['status']=="Regular") echo "selected"; ?>>Regular</option>
                    <option value="Irregular" <?php if($row['status']=="Irregular") echo "selected"; ?>>Irregular</option>
                    <option value="Not Enrolled" <?php if($row['status']=="Not Enrolled") echo "selected"; ?>>Not Enrolled</option>
                </select>

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