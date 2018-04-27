<?php

namespace Crystal;

use GuzzleHttp\Exception\RequestException;

class Crystal extends \Crystal\Base
{
    /**
     * Method setPkToken()
     * ------------------------------
     *
     * Sets your companies public key token
     *
     * @param string $value
     * @return mixed
     */
    public function setPkToken($value = "")
    {
        if (!empty($value)) {
            $this->data['pk_token'] = $value;
            return $this->data['pk_token'];
        }
    }

    /**
     * Method setSkToken()
     * ------------------------------
     *
     * Sets your companies secret key token
     *
     * @param string $value
     * @return mixed
     */
    public function setSkToken($value = "")
    {
        if (!empty($value)) {
            $this->data['sk_token'] = $value;
            return $this->data['sk_token'];
        }
    }


    /**
     * Method retrieveAllClients()
     * ------------------------------
     *
     * Retrieves all of your companies clients
     *
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveAllClients()
    {
        try {
            $url = '/clients/get';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveAllQuotes()
     * ------------------------------
     *
     * Retrieves all of your companies quotes
     *
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveAllQuotes()
    {
        try {
            $url = '/quotes/get';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveAllJobs()
     * ------------------------------
     *
     * Retrieves all of your companies jobs
     *
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveAllJobs()
    {
        try {
            $url = '/jobs/get';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveAllInvoices()
     * ------------------------------
     *
     * Retrieves all of your companies invoices
     *
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveAllInvoices()
    {
        try {
            $url = '/invoices/get';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveAllEmployees()
     * ------------------------------
     *
     * Retrieves all of your companies invoices
     *
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveAllEmployees()
    {
        try {
            $url = '/employees/get';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveClient()
     * ------------------------------
     *
     * Retrieves a single client by id eg, 1
     *
     * @param $client_id
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveClient($client_id)
    {
        try {
            $this->data['client_id'] = $client_id;
            $url = '/clients/get-single';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveQuote()
     * ------------------------------
     *
     * Retrieves a single quote by ref eg, 'QU1/1'
     *
     * @param $quote_ref
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveQuote($quote_ref)
    {
        try {
            $this->data['quote_ref'] = $quote_ref;
            $url = '/quotes/get-single';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveJob()
     * ------------------------------
     *
     * Retrieves a single job by ref eg, 'JO1/1'
     *
     * @param $job_ref
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveJob($job_ref)
    {
        try {
            $this->data['job_ref'] = $job_ref;
            $url = '/jobs/get-single';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveInvoice()
     * ------------------------------
     *
     * Retrieves a single invoice by ref eg, 'JO1/1'
     *
     * @param $invoice_ref
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveInvoice($invoice_ref)
    {
        try {
            $this->data['invoice_ref'] = $invoice_ref;
            $url = '/invoices/get-single';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }

    /**
     * Method retrieveEmployee
     * ------------------------------
     *
     * Retrieves a single employee by id eg, 1
     *
     * @param $employee_id
     * @return array|mixed|\Psr\Http\Message\ResponseInterface
     */
    public function retrieveEmployee($employee_id)
    {
        try {
            $this->data['employee_id'] = $employee_id;
            $url = '/employees/get-single';
            $response = $this->callCrystal($url, $this->data);
            return $response;
        } catch (RequestException $e) {
            $response = $this->StatusCodeHandling($e);
            return $response;
        }
    }
}