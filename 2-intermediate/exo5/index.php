<?php ob_start();
$title = "Exo 5 : Access Modifiers"; //Title of the training
?>

<?php
/************************
 * Create a class to manage Books.
 * Every book has a name, an edition, an author and a release date.
 * The attribute of this class must be private.
 * The program allows to filter the books by the edition and the release date.
 * We should use POST method. 
 ************************/
?>

<!-- The code here -->

<?php
    
    class Book {
        private $name;
        private $edition;
        private $author;
        private $releaseDate;

        public function getEdition(){
            return $this->edition;
        }

        public function getReleaseDate(){
            return $this->releaseDate;
        }

        public function __construct($name, $edition, $author, $releaseDate){
            $this->name = $name;
            $this->edition = $edition;
            $this->author = $author;
            $this->releaseDate = $releaseDate;
        }

        public function __toString(){
            $txt = "Name : ".$this->name. "<br/>";
            $txt .= "Edition : ".$this->edition. "<br/>";
            $txt .= "Author : ".$this->author. "<br/>";
            $txt .= "Release Date : ".$this->releaseDate. "<br/>";
        
            return $txt;
        }
    }

    $book1 = new Book("Angels", "Artège", "Haumonté","2009");
    $book2 = new Book("CashFlow", "Gold", "Claudio","2018");
    $book3 = new Book("Clear Vision", "Artège", "Arnold","2009");
    $book4= new Book("Magnalia Dei", "Artège", "EBROTTIE","2018");
    $book5= new Book("Financial Tips", "Gold", "Precious","2020");

    $bookstore = [$book1, $book2, $book3, $book4, $book5];


    function dispalyBookStore($books){
        echo "---------------------------------- <br />";
        foreach($books as $book){
            echo $book;
            echo "---------------------------------- <br />";  
        }
    }

    function displayBooks($books,$edition,$date){
        echo "---------------------------------- <br />";
        foreach($books as $book){
            if(($book->getEdition() == $edition || $edition =="all") && ($book->getReleaseDate() == (int)$date || $date =="all")){
                echo $book;
                echo "---------------------------------- <br />"; 
            } 
        }
    }
?>

<form action="" method="POST">
    <div class="form-group">
        <label>Edition : </label>
        <select name="edition">
            <option value="all">All</option>
            <option value="artege">Artège</option>
            <option value="gold">Gold</option>
        </select>
    </div>

    <div class="form-group">
        <label>Release Date : </label>
        <select name="releaseDate">
            <option value="all">All</option>
            <option value="2009">2009</option>
            <option value="2018">2018</option>
            <option value="2020">2020</option>
        </select>
    </div>
    <input type="submit" class="btn btn-primary" value="Validate">
</form>

<?php
    if(isset($_POST['edition']) && !empty($_POST['edition']) && 
        isset($_POST['releaseDate']) && !empty($_POST['releaseDate']))
    {
        displayBooks($bookstore,$_POST['edition'],$_POST['releaseDate']);
    }else {
        dispalyBookStore($bookstore);
    }

?>

<?php
/************************
 * DO NOT MODIFY
 * ALLOW TO INCLUDE THE MENU AND THE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
