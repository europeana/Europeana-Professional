<?php
// File info Extension for Bolt

namespace Bolt\Extension\Europeana\FileHelper;

use Bolt\BaseExtension as BoltExtension;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Extension extends BoltExtension
{
    public function initialize()
    {

        //    POST listing for download
        $this->app
            ->post('/download/', array($this, 'downloadHandler'))
            ->bind('downloadHandler');

        $this->addTwigFunction('fileInfo', 'fileInfo');
        $this->addTwigFunction('fileDownloadAction', 'fileDownloadAction');

        $this->absFilePath = $this->app['paths']['filespath'] . '/';
    }

    public function fileInfo($file = null)
    {

        $filePath = ( is_array($file) ) ? $this->absFilePath . $file['filename'] : $this->absFilePath . $file;

        if (file_exists($filePath)) {
            return array(
                'filename' => $this->fileName($filePath),
                'filesize' => $this->fileSize($filePath),
                'filetype' => $this->fileType($filePath),
                'filedate' => $this->fileLastModified($filePath),
                'mimetype' => $this->fileMimeType($filePath),
                'exists' => true
            );
        }
        else {
            return array(
                'filename' => $this->fileName($filePath),
                'filesize' => null,
                'filetype' => null,
                'filedate' => null,
                'mimetype' => null,
                'exists' => false
            );
        }
    }

    public function fileDownloadAction()
    {

        $formAction = sprintf('action="%s" method="post"', $this->app['paths']['root'] . 'download/' );

        return  new \Twig_Markup($formAction, 'UTF-8'); ;
    }

    public function downloadHandler(Request $request)
    {
        $target = $request->request->get('downloadfile');
        $filePath = $this->absFilePath . $target;
        $mimeType = self::fileMimeType($filePath);

        //    send file
        return $this->app->sendFile($filePath, 200, array('Content-type' => $mimeType), 'attachment');
    }

    private function fileName($filePath)
    {
        $filename = pathinfo($filePath)['basename'];
        return $filename;
    }

    private function fileSize($filePath)
    {

        $decimals = $this->config['decimal'];
        $bytes = filesize($filePath);
        $sz = 'BKMGTP';
        $factor = floor((strlen($bytes) - 1) / 3);

        $filesize = sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor] . 'B';
        return $filesize;
    }

    private function fileType($filePath)
    {
        $filetype = pathinfo($filePath)['extension'];
        return $filetype;
    }

    private function fileMimeType($filePath)
    {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $type = finfo_file($finfo, $filePath);
        finfo_close($finfo);

        return $type;
    }

    private function fileLastModified($filePath)
    {
        $format = $this->config['date'];
        $mtime = filemtime($filePath);
        if ($mtime) {
            return date($format, filemtime($filePath));
        }
        else {
            return null;
        }
    }
}
