<?php
class Movie {

    

    public $title;
    public $genre;
    public $date;

    public function __construct($title, $genre, $date){

        $this -> title = $title;
        $this -> genre = $genre;
        $this -> date = $date;
    }

    public function getFullInfo() {

        $this -> title . " " . $this -> genre . " " . $this -> date . " " ;
    }
        

}

$movie1 = new Movie ("Inception", "Action", "2010");
$movie2 = new Movie ("The Wolf Of Wall Street", "Commedy", "2013");

var_dump($movie1);
echo "<br>";
var_dump($movie2);

?>