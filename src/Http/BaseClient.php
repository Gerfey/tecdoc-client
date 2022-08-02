<?php

namespace Gerfey\TecDoc\Http;

use Gerfey\TecDoc\Contracts\Http\BaseClientInterface;
use Gerfey\TecDoc\Contracts\Http\ResponseTecDocInterface;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;

class BaseClient implements BaseClientInterface
{
    protected $hostname = '';

    protected $endpoint = '';

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'http_errors' => false,
            'verify' => false,
            'base_uri' => $this->hostname
        ]);
    }

    public function createRequest(string $method = 'POST', array $options = []): ResponseTecDocInterface
    {
        try {
            $response = $this->client->request($method, $this->endpoint, [
                'content-type' => 'application/json',
                'query' => [
                    'api_key' => config('tecdoc.auth.api_key')
                ],
                'body' => json_encode($this->getQueryOptions($options))
            ]);
            return new ResponseTecDoc($response);
        } catch (ClientException $e) {
            return new \Exception($e->getMessage());
        }
    }

    private function getQueryOptions(array $options = []): array
    {
        $correct_options = [];
        foreach ($options as $function => $value) {
            $correct_options[$function] = array_merge($value, $this->getDefaultOptions());
        }
        return $correct_options;
    }

    private function getDefaultOptions(): array
    {
        return [
            'provider' => config('tecdoc.auth.provider_id'),
            'country' => config('tecdoc.auth.language_code'),
            'lang' => config('tecdoc.auth.language_code'),
            'articleCountry' => config('tecdoc.auth.language_code'),
            'countriesCarSelection' => config('tecdoc.auth.language_code')
        ];
    }
}
