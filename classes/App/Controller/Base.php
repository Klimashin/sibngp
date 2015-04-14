<?php
namespace App\Controller;

class Base extends \App\Page
{
    public function action_index()
    {
        $this->view->subview = 'base';

        $imgDir = dirname(realpath('index.php')) . '/assets/img';

        foreach (scandir($imgDir . '/sertificates/jpg/') as $file) {
            if (!preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $file)) { continue; }
            $serts[] = '/assets/img/sertificates/jpg/' . $file;
            $sertThumbs[] = '/assets/img/sertificates/jpg/thumbs/' . $file;
        }

        foreach (scandir($imgDir . '/recalls/jpg') as $file) {
            if (!preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $file)) { continue; }
            $recalls[] = '/assets/img/recalls/jpg/' . $file;
            $recallThumbs[] = '/assets/img/recalls/jpg/thumbs/' . $file;
        }

        foreach (scandir($imgDir . '/slides') as $file) {
            if (!preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $file)) { continue; }
            $slides[] = '/assets/img/slides/thumbs/' . $file;
        }
        $slides['length'] = count($slides);

        $this->view->slides = $slides;
        $this->view->logo = '/assets/img/logo.png';
        $this->view->sertificates = $serts;
        $this->view->recalls = $recalls;
        $this->view->recallThumbs = $recallThumbs;
        $this->view->sertThumbs = $sertThumbs;
    }
}
