<head>
    <title>Students Table</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Mona+Sans:ital,wght@0,200..900;1,200..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>


<?php
include 'db.php';

session_start();

$filter = 'name';

if (!isset($_SESSION['user'])){
    header("Location: login-db.php");
    exit();
}

if (isset($_POST['reset'])) {
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
}

if (isset($_POST['submit']) && !empty($_POST['search'])) {

    $search = $_POST['search'] . "%";

    if (isset($_POST['filter'])) {
        $filter = $_POST['filter'];
    }

    $allowed = ['name','email','course','program','address','year_level','section','status'];

    if (!in_array($filter, $allowed)) {
        $filter = 'name';
    }

    $sql = "SELECT * FROM students WHERE $filter LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $search);

    $stmt->execute();
    $result = $stmt->get_result();

} elseif (!isset($_POST['reset'])) {
    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);
}
?>

<body>
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
    <div class="circle circle-3"></div>
    <div class="circle circle-4"></div>

    <div class="head">
        <button class="menu" onclick="openNav()" ><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></button>
        <h1>Students Table</h1>
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
    </div>

    <div class="content">
        
  <div class="search-wrap">
    <form class="search" method="POST">
        <input class="search" type="text" name="search" placeholder="Search..."
    value="<?php echo isset($_POST['search']) ? htmlspecialchars($_POST['search']) : ''; ?>">

        <div class="radio-group">
        <label>
            <input type="radio" name="filter" value="name"
            <?php if($filter == 'name') echo 'checked'; ?>> Name
        </label>

        <label>
            <input type="radio" name="filter" value="email"
            <?php if($filter == 'email') echo 'checked'; ?>> Email
        </label>

        <label>
        <input type="radio" name="filter" value="course"
        <?php if($filter == 'course') echo 'checked'; ?>> Course
        </label>

        <label>
        <input type="radio" name="filter" value="program"
        <?php if($filter == 'program') echo 'checked'; ?>> Program
        </label>

        <label>
        <input type="radio" name="filter" value="address"
        <?php if($filter == 'address') echo 'checked'; ?>> Address
        </label>

        <label>
        <input type="radio" name="filter" value="year_level"
        <?php if($filter == 'year_level') echo 'checked'; ?>> Year Level
        </label>

        <label>
        <input type="radio" name="filter" value="section"
        <?php if($filter == 'section') echo 'checked'; ?>> Section
        </label>

        <label>
        <input type="radio" name="filter" value="status"
        <?php if($filter == 'status') echo 'checked'; ?>> Status
        </label>
</div>

        <input class="btn" id="search_btn" type="submit" name="submit" value="Search">

        <button type="submit" name="reset" id="search_all" class="btn show-all">Show All</button>
</form>
</div>
        
<?php


echo "<div class='table-wrap'>";
echo "<table border='4' class='table'>";
echo "<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Program</th>
<th>Address</th>
<th>Year Level</th>
<th>Section</th>
<th>Status</th>
<th>Action</th>
</tr>";

while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['course']."</td>";
    echo "<td>".$row['program']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>".$row['year_level']."</td>";
    echo "<td>".$row['section']."</td>";
    echo "<td>".$row['status']."</td>";
    echo "<td>
    <a class='hpr_link' href='update.php?id=".$row['id']."'>Edit</a>
    <a class='hpr_link' href='delete.php?id=".$row['id']."' onclick=\"return confirm('Are you sure you want to delete this?')\">Delete</a>
    </td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
?>
    <a href="create.php?" class="btn">Back</a>
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
    