<?php
$path = str_replace('/', DIRECTORY_SEPARATOR, __DIR__);
// require $path . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

$client = new Client([
    'curl' => array(CURLOPT_SSL_VERIFYPEER => false,),
]);
try {
    $response = $client->get('https://api.thecatapi.com/v1/images/search');
} catch (ConnectException $e) {
    exit('Connection error');
} catch (RequestException $e) {
    echo "Request Exception" . PHP_EOL;
    echo $e->getRequest() . PHP_EOL;
    echo "Connection error";
    if ($e->hasResponse()) {
        echo $e->getResponse() . PHP_EOL;
    }
    exit();
}
$body = $response->getBody();
$data = json_decode($body);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CATS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">RANDOM CAT CATEGORIES</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">No category<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">In boxes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">In clothes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">With hats</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">In sinks</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">With sunglasses</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">With ties</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/">In clothes</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <img src="<?php echo $data[0]->url ?>" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>