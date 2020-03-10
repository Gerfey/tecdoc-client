<?php

namespace Gerfey\TecDoc\Contracts\Http;

interface BaseClientInterface
{
    public function createRequest(): ResponseTecDocInterface;
}