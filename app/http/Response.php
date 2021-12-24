<?php

namespace App\http;

class Response
{
    private $httpCode = 200;
    private $header = [];
    private $contentType = 'text/html';
    private $content;

    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setConetntType($contentType);
    }

    public function setConetntType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('content-type', $contentType);
    }

    public function addHeader($key, $value)
    {
        $this->header[$key] = $value;
    }

    private function sendHeaders()
    {
        http_response_code($this->httpCode);
        foreach($this->header as $key => $value){
            header($key.':'.$value);
        }
    }

    public function sendResponse()
    {
        $this->sendHeaders();
        switch($this->contentType){
            case 'text/html';
            echo $this->content;
            exit;
        }
    }
}
