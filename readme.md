# CrystalHub
## PHP-SDK for MyCrystalHub API

<p>Used to access your companies data.</p>

### Usage
<p>Pull in the composer package by running the command below:</p>

```
composer require oliveris/crystal-hub
```

<p>Import the Crystal namespace into the class (autoloading)</p>

```
use Crystal\Crystal;
```

## Examples

### Setting your API environment
<p>Below shows an example if you need to access a different environments API, for example, staging.</p>

```
$crystal = new Crystal();
$crystal->setApiEnvironment('staging');
```

### Retrieving all of the companies clients
<p>Below is a basic example of how to make a request to retrieve your companies clients.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveAllClients();
```

### Retrieving all of the companies quotes
<p>Below is a basic example of how to make a request to retrieve your companies quotes.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveAllQuotes();
```

### Retrieving all of the companies jobs
<p>Below is a basic example of how to make a request to retrieve your companies jobs.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveAllJobs();
```

### Retrieving all of the companies invoices
<p>Below is a basic example of how to make a request to retrieve your companies invoices.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveAllInvoices();
```

### Retrieving all of the companies employees
<p>Below is a basic example of how to make a request to retrieve your companies employees.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveAllEmployees();
```

### Retrieving a single client
<p>Below is a basic example of how to make a request to retrieve a single client.</p>
<p>The $client_id variable should be an integer type.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveClient($client_id);
```

### Retrieving a single quote
<p>Below is a basic example of how to make a request to retrieve a single quote.</p>
<p>The $quote_ref variable should be a string type, eg 'QU1/1'.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveQuote($quote_ref);
```

### Retrieving a single job
<p>Below is a basic example of how to make a request to retrieve a single job.</p>
<p>The $job_ref variable should be a string type, eg 'JO1/1'.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveJob($job_ref);
```

### Retrieving a single invoice
<p>Below is a basic example of how to make a request to retrieve a single invoice.</p>
<p>The $invoice_ref variable should be a string type, eg 'IN1/1'.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveInvoice($invoice_ref);
```

### Retrieving a single employee
<p>Below is a basic example of how to make a request to retrieve a single employee.</p>
<p>The $employee_id variable should be an integer type.</p>

```
$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

$crystal->retrieveEmployee($employee_id);
```

### License

CrystalHub is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).