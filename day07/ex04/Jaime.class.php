<?php

class Jaime extends Lannister {

    public function sleepWith($name) {

        if (is_a($name, 'Tyrion'))
            print ("Not even if I'm drunk !" . PHP_EOL);
        else if (is_a($name, 'Sansa'))
            print ("Let's do this." . PHP_EOL);
        else if (is_a($name, 'Cersei'))
            print ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
    }
}