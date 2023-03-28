<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <style>
        body{
            background-color: #18122B;
            color: whitesmoke;
        }
    </style>
</head>
<body>
<?php 
    require("./Person.php");

    class Student extends Person {
        public $major;
        public $studentID;

        public function __construct($name, $age, $major, $studentID) {
            $this -> name = $name;
            $this -> age = $age;
            $this -> major = $major;
            $this -> studentID = $studentID;
        }

        public function setStudentID($studentID) {
            $this -> studentID = $studentID;
        }

        public function greet() {
            return "Hello, my name is {$this -> name}, I am {$this -> age} years old and I am majoring in {$this -> major}.";
        }
    }

    $student = new Student("Mohil", 22, "BTech in Computer", 23);
    $message = $student -> greet();

    echo "<h1>$message</h1>";
    echo "<h1>Current Student ID: {$student -> studentID}</h1>";
    $student -> setStudentID(12);
    echo "<h1>New Student ID: {$student -> studentID}</h1>";
?>
</body>
</html>