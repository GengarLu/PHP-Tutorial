<?php
    // __destruct(解構子)則是拿來執行收尾的工作，例如：關閉資料庫連線、清空不必要的變數(如cookie)...等等。
    class Person{     

    public $name;         
    public $age;         
    public $sex;         

    public function __construct($name="", $sex="Male", $age=22)
    {   
        $this->name = $name;
        $this->sex  = $sex;
        $this->age  = $age;
    }

    /**
     * say method
     */
    public function say()
    {
        echo "Name：".$this->name." , Sex：".$this->sex." , Age：".$this->age;
    }   

    /**
     * 声明一个析构函数
     */
    public function __destruct()
    {
            echo "再见，请记住我的名字：".$this->name . "<br>";
    }
}

$person = new Person("Yufei");

//會先執行function的內容，才執行destruct
echo $person->say() . "<br>";

// 销毁刚刚创建的对象
unset($person);


$person_hero = new Person('Hero');
// 销毁刚刚创建的对象
$person_hero = null;

$peson_libai = new Person('Libai'); // 程序结束会自动调用析构函数

unset($peson_libai);
?>
<a href='30_Getters_&_Setters.php'>按此可連結下一篇</a>