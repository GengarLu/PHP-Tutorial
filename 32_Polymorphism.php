<?php
    class Fruit{

        public $name;
        public $color;

        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }

        public function intro(){
            echo "A {$this->name} is a fruit and the color of fruit is {$this->color}.";
        }
    }

    class Cherry extends Fruit{
        public $weight;

        public function __construct($name, $color, $weight){
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        public function intro(){
            echo "A {$this->name} is a fruit and the color of fruit is {$this->color}, and the weight is {$this->weight} gram.";
        }
    }

    //兩class中都擁有intro()，這時新建的object的變數數量決定該執行哪個class的intro()
    $cherry = new Cherry("Cherry", "bright pink", 20);
    $cherry->intro();
?>
<a href='33_Registration_Form.php'>按此可連結下一篇</a>