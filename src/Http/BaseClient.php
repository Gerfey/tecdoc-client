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

    /**
     * BaseClient constructor.
     */
    public function __construct()
    {
        $this->client = new Client([
            'http_errors' => false,
            'verify' => false,
            'base_uri' => $this->hostname
        ]);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return ResponseTecDocInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createRequest(string $method = 'POST', array $options = []): ResponseTecDocInterface
    {
        try {
            $response = $this->client->request($method, $this->endpoint, [
                'content-type' => 'application/json',
                'query' => [
                    'api_key' => getenv('TECDOC_API_KEY')
                ],
                'body' => json_encode($this->getQueryOptions($options))
            ]);
            return new ResponseTecDoc($response);
        } catch (ClientException $e) {
            return new \Exception($e->getMessage());
        }
    }

    /**
     * @param array $options
     * @return array
     */
    private function getQueryOptions(array $options = []): array
    {
        $correct_options = [];
        foreach ($options as $function => $value) {
            $correct_options[$function] = array_merge($value, $this->getDefaultOptions());
        }
        return $correct_options;
    }

    /**
     * @return array
     */
    private function getDefaultOptions(): array
    {
        return [
            'provider' => getenv('TECDOC_PROVIDER_ID'),
            'lang' => getenv('TECDOC_LANGUAGE_CODE'),
            'articleCountry' => getenv('TECDOC_LANGUAGE_CODE')
        ];
    }
}