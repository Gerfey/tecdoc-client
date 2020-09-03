<?php

namespace Gerfey\TecDoc\Contracts\Http;

use Illuminate\Support\Collection;

interface ResponseTecDocInterface
{
    public function getJson(): object;

    public function getCollection(): Collection;

    public function getStatusCode(): int;
}
