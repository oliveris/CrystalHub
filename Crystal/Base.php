<?php

namespace Crystal;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class Base
{
    const API_URL = "http://staging.mycrystalhub.uk/api/v1";

    protected static $client;

    public function __construct()
    {
        self::$client = new \GuzzleHttp\Client();
    }

    protected static function callCrystal($request, $data = [])
    {
        try {
            $url = self::API_URL . $request;
            $response = self::$client->post($url, [
                'headers' => ['Content-Type' => 'application/json'],
                'body'    => json_encode($data),
                'debug'   => true
            ]);
            return json_decode($response->getBody()->getContents());
        } catch (RequestException $e) {
            $response = self::statusCodeHandling($e);
            return $response;
        }
    }

    protected static function statusCodeHandling($e)
    {
        $response = [
            'statuscode' => $e->getResponse()->getStatusCode(),
            'error'      => json_decode($e->getResponse()->getBody(true)->getContents())
        ];
        return $response;
    }
}