 <?php
// static properties , static method
    class Sample {
        public static $name = "Hello World";  //Static Properties
        static function sample () {     //Static Method
            echo "Hello World";
        }
    }
    sample::Sample();
    echo sample::$name;
 ?>

 <?php 
    class Same {
        public static $color = "Red";
        static function color () {
            echo self::$color;
        }
    }
    same::color();
 ?>


