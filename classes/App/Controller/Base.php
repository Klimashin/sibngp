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

        foreach (scandir(dirname(realpath('index.php')) . '/assets/img/recalls/jpg') as $file) {
            $recalls[] = '/assets/img/recalls/jpg/' . $file;
        }

        $this->view->sertificates = $serts;
        $this->view->recalls = $recalls;
    }
}
