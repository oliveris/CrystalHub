<?php

namespace Crystal;

use GuzzleHttp\Exception\RequestException;

class Crystal extends \Crystal\Base
{
    private $data = [];

    private $pk_token;

    private $sk_token;

    private $client_id;

    private $quote_ref;

    private $job_ref;

    private $invoice_ref;

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
            $this->client_id = $value;
            return $this->client_id;
        } else {
            throw new \Exception("The client id has not been set");
        }
    }

    public function setQuoteRef($value = "")
    {
        if (!empty($value)) {
            $this->quote_ref = $value;
            return $this->quote_ref;
        } else {
            throw new \Exception("The quote ref has not been set");
        }
    }

    public function setJobRef($value = "")
    {
        if (!empty($value)) {
            $this->job_ref = $value;
            return $this->job_ref;
        } else {
            throw new \Exception("The job ref has not been set");
        }
    }

    public function setInvoiceRef($value = "")
    {
        if (!empty($value)) {
            $this->invoice_ref = $value;
            return $this->invoice_ref;
        } else {
            throw new \Exception("The invoice ref has not been set");
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
                $this->data['quote_ref'] = $this->quote_ref;
                break;
            case 'singleJob':
                $this->data['job_ref'] = $this->job_ref;
                break;
            case 'singleInvoice':
                $this->data['invoice_ref'] = $this->invoice_ref;
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