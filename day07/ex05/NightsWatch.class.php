<?php

class NightsWatch {

    private $arr = array();

    public function recruit($obj) {

        if ($obj instanceof IFighter)
            $this->arr[] = $obj;
    }

    public function fight() {

        foreach ($this->arr as $val)
            $val->fight();
    }
}