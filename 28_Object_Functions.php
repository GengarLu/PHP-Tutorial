<?php
    class Student{
        var $name;
        var $major;
        var $gpa;

        function __construct($Name, $Major, $GPA){
            $this->name = $Name;
            $this->major = $Major;
            $this->gpa = $GPA;
        }

        function HonorRoll(){ //榮譽榜
            if($this->gpa >= 3.5){
                return "Your GPA is on target.";
            }
            return "Your GPA is not on target.";
        }
    }

    $student1 = new Student("Jim", "Computer Science", 3.0);
    $student2 = new Student("Pam", "Programming", 3.5);

    echo "$student1->name , $student1->major , $student1->gpa, " . $student1->HonorRoll() . "<br>";
    echo "$student2->name , $student2->major , $student2->gpa, " . $student2->HonorRoll() . "<br>";
?>
<a href='29_Destructors.php'>按此可連結下一篇</a>