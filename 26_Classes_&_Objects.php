<?php
    class Book{
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book; //建立一個對象object
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 1000;

    $book2 = new Book; //建立一個對象object
    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 1200;

    echo "$book1->title , $book1->author , $book1->pages <br>";
    echo "$book2->title , $book2->author , $book2->pages <br>";
?>
<a href='27_Constructors.php'>按此可連結下一篇</a>