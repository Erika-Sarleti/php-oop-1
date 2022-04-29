<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container-movie{
            padding-bottom: 2em;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    
    <?php
    class Movie
    {
        private $title;
        private $date;
        private $length;
        private $author;

        function __construct($_title, $_author, $_length){
            $this->title = $_title;
            $this->author = $_author;
            $this->length = $_length;
        }
        function setDate($_date){
            $this->date = $_date;
        }
        function getTitle(){
            return $this->title;
        }
        function getAuthor(){
            return $this->author;
        }
        function getLength(){
            return $this->length;
        }
        function getDate(){
            return $this->date;
        }
    }


    $theNorthman = new Movie('The Northman', 'Robert Eggers','140 min');
    $theNorthman->setDate('21 aprile 2022');
    $sonic2 = new Movie('Sonic 2', 'Jeff Fowler', '122 min');
    $sonic2->setDate('07 aprile 2022');
    ?>
    <div class="container-movie">
        <div>
            <?php echo 'Titolo: ' . $theNorthman->getTitle() ;?>
        </div>
        <div>
            <?php echo 'Regia: ' . $theNorthman->getAuthor(); ?>
        </div>
        <div>
            <?php echo 'Durata:' . $theNorthman->getLength(); ?>
        </div>
        <div>
            <?php echo 'Data di uscita: ' . $theNorthman->getDate(); ?>
        </div>
    </div>
    <div class="container-movie">
        <div>
            <?php echo 'Titolo: ' . $sonic2->getTitle() ;?>
        </div>
        <div>
            <?php echo 'Regia: ' . $sonic2->getAuthor(); ?>
        </div>
        <div>
            <?php echo 'Durata:' . $sonic2->getLength(); ?>
        </div>
        <div>
            <?php echo 'Data di uscita: ' . $sonic2->getDate(); ?>
        </div>
    </div>




</body>
</html>