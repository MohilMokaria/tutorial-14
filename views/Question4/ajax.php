<?php
    if(isset($_POST['course'])) {
    $course = $_POST['course'];
    if($course == "diploma") {
        $years = array("First", "Second", "Third");
    } else if($course == "degree") {
        $years = array("First", "Second", "Third", "Fourth");
    }
    echo json_encode($years);
    exit;
    }
?>

<!-- No DB VERSION -->