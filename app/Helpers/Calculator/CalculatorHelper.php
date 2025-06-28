<?php

namespace App\Helpers\Calculator;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CalculatorHelper
{
    use WithCalculatorConfig;

    public Client $client;

    public string $baseDomain;

    public function __construct()
    {
        $this->client = new Client();
        $this->baseDomain = getenv('CALCULATOR_API_DOMAIN');
    }

    public function jointUrl($key = "base_overdraft_data"):string
    {
        return $this->baseDomain.$this->endPoints[$key] ??'';
    }

    public function getData($key = "base_overdraft_data")
    {
        $url = $this->jointUrl($key);
        try {
            $response = $this->client->request('GET', $url);
            return $response->getBody()->getContents();
        }
        catch (\Exception $exception)
        {
            return null;
        }
    }


}
