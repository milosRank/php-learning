<?php 

    class Fruit {

        public $name;
        private $color;
        protected $skin;

        function __construct($name, $color, $skin) {
            $this->name = $name;
            $this->color = $color;
            $this->skin = $skin;
        }

        public function __toString()
        {
            return $this->name . " - " . $this->color . " - " . $this->skin;
        }

        public function get_color() {
            return $this->color;
        }

        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
    }

    $apple = new Fruit("Apple", "red", false);
    $banana = new Fruit("Bannana", "yellow", true);

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();


    class SouthernFruit extends Fruit {
        public $isSouthern = true;
        public $isFavorite;
        const message = "Poruka iz juznog voca";
        
        function __construct($name, $color, $skin, $isFavorite = true) {
            Fruit::__construct($name, $color, $skin);
            $this->isFavorite = $isFavorite;
        }

        public function printColor() {
            echo $this->get_color();
        }

        public function printSkin() {
            echo $this->skin;
        }

        public function __toString() {
            $msg = parent::__toString() . $this->isFavorite . '<br>' . self::message;
            return $msg;
        }

    }

    $orange = new SouthernFruit("Orange", "orange", true);

    echo $orange->isSouthern;
    echo "<br>";
    echo $orange->name;
    echo "<br>";
    echo $orange->get_color();
    echo "<br>";
    echo $orange->isFavorite;
    echo "<br>";
    var_dump($orange);
    echo "<br>";
    echo $apple->__toString();
    echo "<br>";
    echo $orange->__toString();

    // Next is namespacing
?>

