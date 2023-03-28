<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1 | 14</title>
    <style>
        body{
            background-color: #18122B;
        }
        h1{
            color: whitesmoke;
        }
    </style>
</head>
<body>
<?php 
    require("./Person.php");

    class Student extends Person {
        public $major;

        public function __construct($name, $age, $major) {
            $this -> name = $name;
            $this -> age = $age;
            $this -> major = $major;
        }

        public function greet() {
            return "Hello, I am {$this -> name},and I am {$this -> age} years old and I am majoring in {$this -> major}.";
        }
    }

    $student = new Student("Mohil", 22, "Btech in Computers");
    $message = $student -> greet();

    echo "<h1>$message</h1>";
?>
</body>
</html>