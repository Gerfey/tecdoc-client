<?php

namespace Gerfey\TecDoc\Request\Pegasus;

use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;
use Gerfey\TecDoc\Request\Request;

class Pegasus_3_0 extends Request
{
    public function getDirectArticlesByIds6(array $articleIds)
    {
        $this->function = 'getDirectArticlesByIds6';

        return $this->createRequest(
            'POST',
            [
                'articleId' => ['array' => $articleIds],
                'attributs' => true,
                'basicData' => true,
                'documents' => true,
                'normalAustauschPrice' => false,
                'oeNumbers' => true,
                'replacedNumbers' => true,
                'thumbnails' => true,
            ]
        );
    }

    public function getArticleDirectSearchAllNumbersWithState(
        string $articleNumber,
        int $numberType = 0
    ): ResponseTecDocInterface {
        $this->function = 'getArticleDirectSearchAllNumbersWithState';

        return $this->createRequest(
            'POST',
            [
                'articleNumber' => $articleNumber,
                'numberType' => $numberType,
                'searchExact' => true,
            ]
        );
    }

    public function getManufacturers(string $linkingTargetType = 'P')
    {
        $this->function = 'getManufacturers';

        return $this->createRequest(
            'POST',
            [
                'linkingTargetType' => $linkingTargetType,
            ]
        );
    }
}
