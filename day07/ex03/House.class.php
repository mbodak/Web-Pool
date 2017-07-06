<?php

class House {

    public function introduce() {

        $in = 'House ' . $this->getHouseName() . ' of ' . $this->getHouseSeat() . ' : "' . $this->getHouseMotto() . '"'. PHP_EOL;
        print $in;
    }
}