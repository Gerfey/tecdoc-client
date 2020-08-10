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

    public function getArticleDirectSearchAllNumbersWithStateFilterByGenericArticleId(
        string $articleNumber,
        int $genericArticleId,
        int $numberType = 0
    ): ResponseTecDocInterface {
        $this->function = 'getArticleDirectSearchAllNumbersWithState';

        return $this->createRequest(
            'POST',
            [
                'articleNumber' => $articleNumber,
                'genericArticleId' => $genericArticleId,
                'numberType' => $numberType,
                'searchExact' => true,
            ]
        );
    }

    public function getArticleDirectSearchAllNumbersWithStateFilterBrand(
        string $articleNumber,
        int $brandId = null,
        int $numberType = 0
    ): ResponseTecDocInterface {
        $this->function = 'getArticleDirectSearchAllNumbersWithState';

        return $this->createRequest(
            'POST',
            [
                'articleNumber' => $articleNumber,
                'brandId' => $brandId,
                'numberType' => $numberType,
                'searchExact' => true,
            ]
        );
    }

    public function getAmBrands()
    {
        $this->function = 'getAmBrands';

        return $this->createRequest('POST', []);
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

    public function getModelSeries(int $manufacturer_id, string $linkingTargetType = 'P')
    {
        $this->function = 'getModelSeries';

        return $this->createRequest(
            'POST',
            [
                'linkingTargetType' => $linkingTargetType,
                'manuId' => $manufacturer_id,
            ]
        );
    }

    public function getVehicleIdsByCriteria(int $manufacturer_id, int $model_id, string $linkingTargetType = 'P')
    {
        $this->function = 'getVehicleIdsByCriteria';

        return $this->createRequest(
            'POST',
            [
                'carType' => $linkingTargetType,
                'manuId' => $manufacturer_id,
                'modId' => $model_id,
            ]
        );
    }

    public function getVehicleByIds3(array $carIds)
    {
        $this->function = 'getVehicleByIds3';

        return $this->createRequest(
            'POST',
            [
                'carIds' => [
                    'array' => $carIds,
                ],
            ]
        );
    }

    public function getShortCuts2(int $linkingTargetId, string $linkingTargetType = 'P')
    {
        $this->function = 'getShortCuts2';

        return $this->createRequest(
            'POST',
            [
                'linkingTargetId' => $linkingTargetId,
                'linkingTargetType' => $linkingTargetType,
            ]
        );
    }

    public function getChildNodesAllLinkingTarget2(
        int $linkingTargetId,
        int $shortCutId,
        string $linkingTargetType = 'P'
    ) {
        $this->function = 'getChildNodesAllLinkingTarget2';

        return $this->createRequest(
            'POST',
            [
                'linkingTargetId' => $linkingTargetId,
                'shortCutId' => $shortCutId,
                'linkingTargetType' => $linkingTargetType,
                'linked' => true,
                'childNodes' => true,
            ]
        );
    }

    public function getArticleIdsWithState(
        int $linkingTargetId,
        int $assemblyGroupNodeId,
        string $linkingTargetType = 'P'
    ) {
        $this->function = 'getArticleIdsWithState';

        return $this->createRequest(
            'POST',
            [
                'linkingTargetId' => $linkingTargetId,
                'assemblyGroupNodeId' => $assemblyGroupNodeId,
                'linkingTargetType' => $linkingTargetType,
            ]
        );
    }
}
