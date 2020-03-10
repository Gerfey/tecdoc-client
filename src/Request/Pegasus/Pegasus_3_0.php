<?php

namespace Gerfey\TecDoc\Request\Pegasus;

use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;
use Gerfey\TecDoc\Request\Request;

class Pegasus_3_0 extends Request
{
    public function getArticles(string $searchQuery, int $genericArticleId, int $searchType = 3, bool $oeNumbers = true, array $otherParams = []): ResponseTecDocInterface
    {
        $this->function = 'getArticles';
        return $this->createRequest('POST', [
            'searchQuery' => $searchQuery,
            'genericArticleId' => $genericArticleId,
            'searchType' => $searchType,
            'oeNumbers' => $oeNumbers,
            $otherParams
        ]);
    }

    public function getAutoCompleteSuggestions(string $searchQuery): ResponseTecDocInterface
    {
        $this->function = 'getAutoCompleteSuggestions';
        return $this->createRequest('POST', [
            'searchQuery' => $searchQuery
        ]);
    }

    public function getArticleDirectSearchAllNumbersWithState(string $articleNumber): ResponseTecDocInterface
    {
        $this->function = 'getArticleDirectSearchAllNumbersWithState';

        return $this->createRequest('POST', [
            'articleNumber' => $article
        ]);
    }
}