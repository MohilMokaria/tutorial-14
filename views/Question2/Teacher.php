
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
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

    class Teacher extends Person {
        public $name;
        public $age;
        public $teacherID;

        public function __construct($name, $age, $teacherID) {
            $this -> name = $name;
            $this -> age = $age;
            $this -> teacherID = $teacherID;
        }

        public function setTeacherID($teacherID) {
            $this -> teacherID = $teacherID;
        }

        public function greet() {
            return "Hello my name is {$this -> name}, I am {$this -> age} years old";
        } 
    }
    $teacher = new Teacher("Ajay", 123, 456);
    echo "<h1>Current ID of Teacher is {$teacher -> name} = {$teacher -> teacherID}</h1>";
    $teacher -> setTeacherID(789);
    echo "<h1>New ID of Teacher is {$teacher -> name} = {$teacher -> teacherID}</h1>";
?>
</body>
</html>