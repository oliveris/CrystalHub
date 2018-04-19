<?php

namespace Crystal;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class Base
{
    const API_URL = "http://crystal.test/api/v1";

    protected $client;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    protected function callCrystal($request, $data = [])
    {
        try {
            $url = self::API_URL . $request;
            $response = $this->client->post($url, [
                'headers' => ['Content-Type' => 'application/json'],
                'body'    => json_encode($data),
                'debug'   => true
            ]);
            return json_decode($response->getBody()->getContents());
        } catch (RequestException $e) {
            $response = $this->statusCodeHandling($e);
            return $response;
        }
    }

    protected function statusCodeHandling($e)
    {
        $response = [
            'statuscode' => $e->getResponse()->getStatusCode(),
            'error'      => json_decode($e->getResponse()->getBody(true)->getContents())
        ];
        return $response;
    }
}