<head>
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
    <div class="head">
<h1>Students Table</h1>
<p>Here are the students inside the Students table</p>
</div>
    <div class="content">
        <?php


include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

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
    <a class='hpr_link' href='delete.php?id=".$row['id']."'>Delete</a>
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
