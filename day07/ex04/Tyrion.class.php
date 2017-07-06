<?php

class Tyrion extends Lannister {

    public function sleepWith($name) {

        if (is_a($name, 'Jaime'))
            print ("Not even if I'm drunk !" . PHP_EOL);
        else if (is_a($name, 'Sansa'))
            print ("Let's do this." . PHP_EOL);
        if (is_a($name, 'Cersei'))
            print ("Not even if I'm drunk !");
    }
}