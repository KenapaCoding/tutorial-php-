<?php
    trait Pesan {
        public function tampilPesan(){
            return "ini adalah pesan dari trait";
        }
        public function sayHello(){
            return "Hello dari trait";
        }
    }

    class A {
        use Pesan;
    }

    $a = new A();
    echo $a->tampilPesan();
    echo $a->sayHello();

?>