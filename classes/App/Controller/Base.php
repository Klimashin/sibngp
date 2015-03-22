<?php
namespace App\Controller;

class Base extends \App\Page
{
    public function action_index()
    {
        $this->view->subview = 'base';
        $this->view->message = 'Have fun coding';
        
        for ($i=0; $i<5; $i++) {
            $serts[] = 'http://placehold.it/135x200';
            //can't write $this->view->sertificates[] because of framework limitations
        }
        
        $this->view->sertificates = $serts;
    }
}
