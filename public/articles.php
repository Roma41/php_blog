<?php 
    class Article 
    {
        private $heading;
        private $text;
        public function __construct($heading, $text) {
            $this->heading = $heading;
            $this->text = $text;
        }
        public function __toString() {
            return 
            "<article>
                <h2>$this->heading</h2>
                <p>$this->text</p>
            </article>";
        }
    }

    $one = new Article('Привет из прошлого', 'Это был тяжелый год');
    echo $one;    
    // https://www.php.net/manual/ru/language.oop5.magic.php#object.tostring
?>


    