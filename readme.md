# CrystalHub
## PHP-SDK for MyCrystalHub API

<p>Used to access your companies data.</p>

### Usage
<p>Pull in the composer package by running the command below:</p>

```
composer require oliveris/crystal-hub
```

### Basic example
<p>Below is a basic example of how to make a request to retrieve your companies clients.</p>

```
use Crystal\Crystal;

$crystal = new Crystal();
$crystal->setPkToken('{your_company_pk_token}');
$crystal->setSkToken('{your_company_sk_token}');

echo "<pre>";
print_r($crystal->getClients());
echo "</pre>";
```

<p>For full API documentation please visit the link below.<br>(Documentation coming soon.)</p>

### License

ferdoc is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).