<?php
    // __construct(建構子)經常會用來執行必要動作，例如：資料庫連線、呼叫父類別的函數、執行前的準備工作...等。
    class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($Title, $Author, $Pages){
            $this->title = $Title; //this指的是所創建的(當前)對象
            $this->author = $Author;
            $this->pages = $Pages;
        }
    }

    //每當在這創建一個對象並保存時實際上是在調用建構函數construct
    $book1 = new Book("Harry Potter", "JK Rowling", 1000);
    $book1->title = "Hungry game"; //也可隨時改變變數
    //每當在這創建一個對象並保存時實際上是在調用建構函數construct
    $book2 = new Book("Lord of the Rings", "Tolkien", 1200);

    echo "$book1->title , $book1->author , $book1->pages <br>";
    echo "$book2->title , $book2->author , $book2->pages <br>";
?>
<a href='28_Object_Functions.php'>按此可連結下一篇</a>