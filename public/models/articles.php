<?php 
    class Article 
    {
        public $heading;
        public $text;
        public $id;
        public $created;
        public function __construct($id,$heading, $text,$created) {
            $this->heading = $heading;
            $this->text = $text;
            $this->id = $id;
            $this->created = $created;
        }
        public function __toString() {
            return 
            "<article>
                <h2>$this->heading</h2>
                <p>$this->text</p>
            </article>";
        }
    }

    
?>


    