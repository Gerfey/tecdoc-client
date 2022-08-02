<?php

namespace Gerfey\TecDoc\Contracts\Http;

use Psr\Http\Message\ResponseInterface;

interface ResponseTecDocInterface
{
    public function getJson(): mixed;

    public function getStatusCode(): int;
}
