<?php

namespace Gerfey\TecDoc\Http;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;

class TecDocClient extends BaseClient
{
    protected string $hostname = 'https://webservice.tecalliance.services';

    protected string $endpoint = '/pegasus-3-0/services/TecdocToCatDLB.jsonEndpoint';
}
