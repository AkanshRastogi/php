
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "" ;
$dbname = "demo";
$conn = new mysqli($servername, $username, $password, $dbname);
// mysqli_select_db($dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$quer = "Select id, name, email_id from demo1";
// $query = "INSERT INTO demo1 (name, email_id, password, gender, country, reason) values('a', 'b', 'c', 'd', 'e', 'f')";
$dat = mysqli_query($conn , $quer);
echo $dat;
if ($dat->num_rows > 0) {
    // output data of each row
    while($row = $dat->fetch_assoc()) {
        echo  $row["name"] ."     |    " .$row["email_id"];
        echo "<li><a href='edit.php?id= " . $row["id"] . "'>Edit DATA</a></li>";
        echo "<li><a href='delete.php?id= " . $row["id"]."'>Delete DATA</a></li><br />";
    }

} else {
    echo "0 results";
}



?>

</body>
</html>
