<?php
namespace App\Controller;

class Base extends \App\Page
{
    public function action_index()
    {
        $this->view->subview = 'base';
        $this->view->message = 'Have fun coding';

        foreach (scandir(dirname(realpath('index.php')) . '/assets/img/sertificates/jpg') as $file) {
            $serts[] = '/assets/img/sertificates/jpg/' . $file;
        }
        
        unset($serts[0]); unset($serts[1]); // unset . and ..

        $this->view->sertificates = $serts;
    }
}
