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
        $imgDir = dirname(realpath('web/index.php')) . '/assets/img/';
        foreach (scandir($imgDir . '/sertificates/jpg') as $file) {
            if (!preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $file)) { continue; }
            $serts[] = 'web/assets/img/sertificates/jpg/' . $file;
        }

        foreach (scandir($imgDir . '/recalls/jpg') as $file) {
            if (!preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $file)) { continue; }
            $recalls[] = 'web/assets/img/recalls/jpg/' . $file;
        }

        foreach (scandir($imgDir . '/slides') as $file) {
            if (!preg_match('/\.(jpg|jpeg|png|gif)(?:[\?\#].*)?$/i', $file)) { continue; }
            $slides[] = 'web/assets/img/slides/' . $file;
        }

        foreach ($serts as $filename) {
            $thumbdir = 'web/assets/img/sertificates/jpg/thumbs/';
            $this->createThumb($filename, $thumbdir, 300, 420);
        }

        foreach ($recalls as $filename) {
            $thumbdir = 'web/assets/img/recalls/jpg/thumbs/';
            $this->createThumb($filename, $thumbdir, 300, 420);
        }

        foreach ($slides as $filename) {
            $thumbdir = 'web/assets/img/slides/thumbs/';
            $this->createThumb($filename, $thumbdir, 640, 480);
        }
    }

    private function createThumb($filename, $thumbdir, $width, $height)
    {
        $source = @imagecreatefromjpeg($filename);

        if (!$source) { die('Coudn\'t open ' . $filename); }

        list($baseWidth, $baseHeight) = getimagesize($filename);
        $thumb = imagecreatetruecolor($width, $height);
        imagecopyresized($thumb, $source, 0, 0, 0, 0, $width, $height, $baseWidth, $baseHeight);
        imagejpeg($thumb, $thumbdir . basename($filename), 100);
    }
}
