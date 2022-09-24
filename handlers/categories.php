<?php
$path = str_replace('/', DIRECTORY_SEPARATOR, __DIR__);
// require $path . '/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

$id = $_GET['id'];
$url = 'https://api.thecatapi.com/v1/images/search';
$category = 'Random cat';

if($id != '') {
    $url = "https://api.thecatapi.com/v1/images/search?category_ids={$id}";
    switch ($id) {
        case '5':
            $category = 'Cats in boxes';
            break;
        case '15':
            $category = 'Cats in clothes';
            break;
        case '1':
            $category = 'Cats with hat';
            break;
        case '14':
            $category = 'Cats in sinks';
            break;
        case '2':
            $category = 'Cats in space';
            break;
        case '4':
            $category = 'Cats with sunglasses';
            break;
        case '7':
            $category = 'Cats with ties';
            break;
        default:
            http_response_code(STATUS_BAD_REQUEST);
            die;
    }
}

$client = new Client([
    'curl' => array(CURLOPT_SSL_VERIFYPEER => false,),
]);
try {
    $response = $client->get($url);
} catch (ConnectException $e) {
    exit('Connection error');
} catch (\GuzzleHttp\Exception\GuzzleException){
    http_response_code(STATUS_INTERNAL_SERVER_ERROR);
    return;
}catch (RequestException $e) {
    echo "Request Exception" . PHP_EOL;
    echo $e->getRequest() . PHP_EOL;
    if ($e->hasResponse()) {
        echo $e->getResponse() . PHP_EOL;
    }
    exit();
}

$body = $response->getBody();
$data = json_decode($body);
require __DIR__ . '/main_page.php';