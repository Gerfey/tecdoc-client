<?php

namespace Gerfey\TecDoc\Request\Pegasus;

use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;
use Gerfey\TecDoc\Request\Request;

class Informations extends Request
{
    public function getLanguages(): ResponseTecDocInterface
    {
        $this->function = 'getLanguages';
        return $this->createRequest();
    }

    public function getPegasusVersionInfo2(): ResponseTecDocInterface
    {
        $this->function = 'getPegasusVersionInfo2';
        return $this->createRequest();
    }

    public function getCountries(): ResponseTecDocInterface
    {
        $this->function = 'getCountries';
        return $this->createRequest();
    }

    public function getCriteria2(): ResponseTecDocInterface
    {
        $this->function = 'getCriteria2';
        return $this->createRequest();
    }

    public function getAmBrandAddress(int $brandNo): ResponseTecDocInterface
    {
        $this->function = 'getAmBrandAddress';
        return $this->createRequest('POST', [
            'brandNo' => $brandNo
        ]);
    }

    public function getGenericArticles(string $linkingTargetType = 'V'): ResponseTecDocInterface
    {
        $this->function = 'getGenericArticles';
        return $this->createRequest([
            'linkingTargetType' => $linkingTargetType
        ]);
    }
}