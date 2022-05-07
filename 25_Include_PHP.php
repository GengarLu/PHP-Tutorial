<?php
    //當在網路上po很多文章時，標題、作者、字數等都可在這直接把變數改掉
    $title = "My first post";
    $author = "Allen";
    $wordCount = 400;
    include "25-1_article_header.php";

    //也可在另一個php裡設立變數或函式，並在這直接echo出來
    include "25-2_useful_tools.php";
    echo sayHi("Allen");
    echo $perMeter;
?>
<a href='26_Classes_&_Objects.php'>按此可連結下一篇</a>