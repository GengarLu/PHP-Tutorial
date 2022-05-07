<?php
    class Movie{
        public $title;
        private $rating; //評級，要設為private，因不能隨意更改它
        //G（General Audiences，大眾級）
        //PG（Parental Guidance Suggested，建議家長指導）
        //PG-13（Parents Strongly Cautioned，家長特別留意）
        //R（Restricted，限制級）
        //NC-17（Adults Only，只准成人觀看）

        function __construct($Title, $Rating){
            $this->title = $Title;
            $this->setRating($Rating); //醬在底下設置對象時也能夠限制了
        }

        function getRating(){
            return $this->rating;
        }

        function setRating($rating){
            if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NC-17"){
                $this->rating = $rating;
            }else{
                $this->rating = "Set invalid!";
            }
        }
    }

    $movie = new Movie("Avenagers", "PG-13");

    //在這就不能打印出rating了，因為是private
    // echo "$movie->title, $movie->rating <br>";

    //所以在這利用上面的getRating()
    $movie->setRating("PG"); //利用上面的setRating()更改評級
    echo "$movie->title, " . $movie->getRating() . "<br>";
?>
<a href='31_Inheritance.php'>按此可連結下一篇</a>