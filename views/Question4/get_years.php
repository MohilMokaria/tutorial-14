<!-- DB VERSION -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial_14";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$course_id = $_POST['course_id'];

$sql = "SELECT * FROM year WHERE cid = $course_id";
$result = $conn->query($sql);

$options = "";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $options .= "<option value='" . $row['yid'] . "'>" . $row['name'] . "</option>";
    }
} else {
    $options .= "<option value=''>No years found</option>";
}

echo $options;

$conn->close();
?>
