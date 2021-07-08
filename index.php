<?php

// create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

    class Movie {

        // ATTRIBUTI/PROPRIETA'
        public $title;
        public $kind;
        public $date;
        public $author;
        public $plot;
        public $vote = 0;
        public $originalLenguage;

        // COSTRUTTORE
        function __construct($title, $author, $date, $plot = 'Not available') {
            $this->title = $title;
            $this->plot = $plot;
            $this->author = $author;
            $this->date = date("d-m-Y H:i:s");
        }

        // METODI
        public function decreasePlot () {
            if(strlen($this->plot) > 50) {
              return substr($this->plot, 0, 50) . "...";
            }
        }
    }

    $plot = "Hill Valley, California, 25 ottobre 1985. Marty McFly è un diciassettenne studente di liceo, pigro e spesso ritardatario ma coraggioso, gentile e di buon cuore, fidanzato con Jennifer Parker, sua coetanea e compagna di scuola. Marty sogna di diventare una rockstar e suona la chitarra in un gruppo rock amatoriale, pur senza molta fortuna: il gruppo viene infatti bocciato al provino per suonare al ballo della scuola, perché i docenti ritengono Marty e i suoi compagni troppo rumorosi.";
    
    // ISTANZE/OGGETTI
    $movie1 = new Movie("Ritorno al futuro", "Robert Zemeckis", "1985", $plot);
    $movie1->kind = "Adventure, Comedy, Fantasy";
    $movie1->originalLenguage = "English";
    $movie1->vote = "10/10";
    var_dump($movie1);
    echo("<h3> Plot abbreviato movie1</h3>");
    echo($movie1->decreasePlot());

    $movie2 = new Movie("Matrix", "Andy e Larry Wachowski", "1999");
    $movie2->kind = "Action, Fantasy";
    $movie2->originalLenguage = "English";
    var_dump($movie2);

?>