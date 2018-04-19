<?php

namespace Crystal\Request;

use GuzzleHttp\Exception\RequestException;

class Request extends \Crystal\Base
{
    private $data = [];

    public function setPkToken($value = "")
    {
        if (!empty($value)) {
            $this->data['pk_token'] = $value;
            return $this->data['pk_token'];
        } else {
            throw new \Exception("The pk_token has not been set");
        }
    }

    public function setSkToken($value = "")
    {
        if (!empty($value)) {
            $this->data['sk_token'] = $value;
            return $this->data['sk_token'];
        } else {
            throw new \Exception("The sk_token has not been set");
        }
    }

    public function getClients()
    {
        try {
            $url = '/clients/get';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
}