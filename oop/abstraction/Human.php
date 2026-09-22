<?php
    include("Abstract_class.php");

    class Human extends Organisms{
        #[Override]
        public function alive(): void
        {
            echo "I am alive";
        }
    }

    $h1 = new Human();
    $h1->alive();

?>