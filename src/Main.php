<?php

namespace WlfIO\PHPStanTest;

defined("MAIN_CONST") or define("MAIN_CONST","A CONSTANT");

class Main
{
    private $second;

    public function __construct(){
        $this->second = new Second();
    }
}
