<?php
namespace App\Controller;

class Base extends \App\Page
{
    public function action_index()
    {
        $this->view->subview = 'base';
        
        $imgDir = dirname(realpath('index.php')) . '/assets/img';
        
        foreach (scandir($imgDir . '/sertificates/jpg') as $file) {
            if (in_array($file, ['.', '..'])) { continue; }
            $serts[] = '/assets/img/sertificates/jpg/' . $file;
        }      

        foreach (scandir($imgDir . '/recalls/jpg') as $file) {
            if (in_array($file, ['.', '..'])) { continue; }
            $recalls[] = '/assets/img/recalls/jpg/' . $file;
        }
        
        foreach (scandir($imgDir . '/slides') as $file) {
            if (in_array($file, ['.', '..'])) { continue; }
            $slides[] = '/assets/img/slides/' . $file;
        }
        $slides['length'] = count($slides);
        
        $this->view->slides = $slides;
        $this->view->logo = '/assets/img/logo.png';
        $this->view->sertificates = $serts;
        $this->view->recalls = $recalls;
    }
}
