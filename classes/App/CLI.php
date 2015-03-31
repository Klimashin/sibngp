<?php
namespace App;

class CLI
{
    public $pixie;

    public function __construct($pixie)
    {
        $this->pixie = $pixie;
    }

    public function createThumbs()
    {
        // ti install gd for php use: sudo apt-get install php5-gd && sudo service apache2 restart
        // need to implement
        print_r(gd_info());
        echo "/n";
    }
}
