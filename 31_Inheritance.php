<?php
    class Chef{
        function makeChicken(){
            echo "The chef makes chicken. <br>";
        }
        function makeSalad(){
            echo "The chef makes salad. <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes BBQ ribs. <br>"; //ribs=排骨
        }
    }

    //ItalianChef能繼承 Chef 的function
    class ItalianChef extends Chef{
        function makePasta(){
            echo "The chef makes pasta. <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes Italian Chicken Scones. <br>"; //Scones=烤餅
        }
    }

    $chef = new Chef();
    $chef->makeChicken();

    $ItalianChef = new ItalianChef();
    $ItalianChef->makePasta();

    //Override覆寫
    $chef = new Chef();
    $chef->makeSpecialDish();
    $ItalianChef = new ItalianChef();
    $ItalianChef->makeSpecialDish();
?>
<a href='32_Polymorphism.php'>按此可連結下一篇</a>