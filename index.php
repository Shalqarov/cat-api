<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    function errorPage(string $err)
    {
        // TODO 
        // ! Нужно будет подключить css 
        // ! распределить функции по папкам
    }
    ?>
</head>

<body>
    <?php

    require __DIR__ . '/vendor/autoload.php';

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
    <img src="<?php echo $data[0]->url ?>" />
</body>

</html>