<?php

namespace App\http;

class Request
{
    private $httpMethod, $uri, $queryParams = [], $postVars = [], $header = [];

    public function __construct()
    {
        $this->queryParams = $_GET;
        $this->postVars = $_POST;
        $this->header = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function getHttpMethod()
    {
        $this->httpMethod;
    }

    public function getUri()
    {
        $this->uri;
    }

    public function getQueryParams()
    {
        $this->queryParams;
    }

    public function getPostVars()
    {
        $this->postVars;
    }

    public function getHeader()
    {
        $this->header;
    }
}
