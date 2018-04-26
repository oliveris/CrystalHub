<?php

declare(strict_types = 1);

namespace Crystal;

use GuzzleHttp\Exception\RequestException;

class Crystal extends \Crystal\Base
{
    private static $data = [];

    public static function setPkToken(string $value = "")
    {
        if (!empty($value)) {
            self::$data['pk_token'] = $value;
            return self::$data['pk_token'];
        }
    }

    public static function setSkToken(string $value = "")
    {
        if (!empty($value)) {
            self::$data['sk_token'] = $value;
            return self::$data['sk_token'];
        }
    }

    public static function retrieveAllClients()
    {
        try {
            $url = '/clients/get';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveAllQuotes()
    {
        try {
            $url = '/quotes/get';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveAllJobs()
    {
        try {
            $url = '/jobs/get';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveAllInvoices()
    {
        try {
            $url = '/invoices/get';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveAllEmployees()
    {
        try {
            $url = '/employees/get';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveClient(integer $client_id)
    {
        try {
            $url = '/clients/get-single';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveQuote(string $quote_ref)
    {
        try {
            $url = '/quotes/get-single';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveJob(string $job_ref)
    {
        try {
            $url = '/jobs/get-single';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveInvoice(string $invoice_ref)
    {
        try {
            $url = '/invoices/get-single';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }

    public static function retrieveEmployee(integer $employee_id)
    {
        try {
            $url = '/employees/get-single';
            $response = self::callCrystal($url, self::$data);
            return $response;
        } catch (RequestException $e) {
            $response = self::StatusCodeHandling($e);
            return $response;
        }
    }
}