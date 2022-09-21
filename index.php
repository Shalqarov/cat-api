<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require __DIR__ . '/vendor/autoload.php';

    use GuzzleHttp\Client;
    use GuzzleHttp\Exception\RequestException;

    $client = new Client([
        'curl' => array(CURLOPT_SSL_VERIFYPEER => false,),
    ]);
    try {
        $response = $client->get('https://api.thecatapi.com/v1/images/search');
    } catch (RequestException $e) {
        echo $e->getRequest() . "\n";
        if ($e->hasResponse()) {
            echo $e->getResponse() . "\n";
        }
    }
    $body = $response->getBody();
    $data = json_decode($body);
    // print_r($data[0]->url);
    ?>
    <img src="<?php echo $data[0]->url ?>" />
</body>

</html>