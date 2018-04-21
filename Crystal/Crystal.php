<?php

namespace Crystal;

use GuzzleHttp\Exception\RequestException;

class Crystal extends \Crystal\Base
{
    private $data = [];

    private $pk_token;

    private $sk_token;

    private $client_id;

    private $quote_id;

    private $job_id;

    private $invoice_id;

    public function setPkToken($value = "")
    {
        if (!empty($value)) {
            $this->pk_token = $value;
            return $this->pk_token;
        } else {
            throw new \Exception("The pk_token has not been set");
        }
    }

    public function setSkToken($value = "")
    {
        if (!empty($value)) {
            $this->sk_token = $value;
            return $this->sk_token;
        } else {
            throw new \Exception("The sk_token has not been set");
        }
    }

    public function setClientID($value = "")
    {
        if (!empty($value)) {
            $this->client_id;
            return $this->client_id;
        } else {
            throw new \Exception("The client id has not been set");
        }
    }

    public function setQuoteID($value = "")
    {
        if (!empty($value)) {
            $this->quote_id;
            return $this->quote_id;
        } else {
            throw new \Exception("The quote id has not been set");
        }
    }

    public function setJobID($value = "")
    {
        if (!empty($value)) {
            $this->job_id;
            return $this->job_id;
        } else {
            throw new \Exception("The job id has not been set");
        }
    }

    public function setInvoiceID($value = "")
    {
        if (!empty($value)) {
            $this->invoice_id;
            return $this->invoice_id;
        } else {
            throw new \Exception("The invoice id has not been set");
        }
    }

    public function composeData($type = null)
    {
        $this->data = [];
        $this->data['pk_token'] = $this->pk_token;
        $this->data['sk_token'] = $this->sk_token;
        switch ($type) {
            case 'singleClient':
                $this->data['client_id'] = $this->client_id;
                break;
            case 'singleQuote':
                $this->data['quote_id'] = $this->quote_id;
                break;
            case 'singleJob':
                $this->data['job_id'] = $this->job_id;
                break;
            case 'singleInvoice':
                $this->data['invoice_id'] = $this->invoice_id;
        }
    }

    public function getClients()
    {
        $this->composeData();
        try {
            $url = '/clients/get';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    public function getQuotes()
    {
        $this->composeData();
        try {
            $url = '/quotes/get';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    public function getJobs()
    {
        $this->composeData();
        try {
            $url = '/jobs/get';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    public function getInvoices()
    {
        $this->composeData();
        try {
            $url = '/invoices/get';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    public function getSingleClient()
    {
        $this->composeData('singleClient');
        try {
            $url = '/clients/get-single';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    public function getSingleQuote()
    {
        $this->composeData('singleQuote');
        try {
            $url = '/quotes/get-single';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    public function getSingleJob()
    {
        $this->composeData('singleJob');
        try {
            $url = '/jobs/get-single';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    public function getSingleInvoice()
    {
        $this->composeData('singleInvoice');
        try {
            $url = '/invoices/get-single';
            $response = $this->callCrystal($url,$this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
}