<?php

namespace Gerfey\TecDoc\Contracts\Http;

use Psr\Http\Message\ResponseInterface;

interface ResponseTecDocInterface
{
    public function getJson();

    public function getStatusCode();
}