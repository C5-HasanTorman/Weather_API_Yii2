<?php
use yii\httpclient\Client;
use yii\helpers\Html;

/** @var yii\web\View $this */

$api_url = 'https://api.openweathermap.org/data/2.5/weather?q=Jordan&appid=cce36086c4d44b8dd07cf495ec7e7c60&units=metric';
$weather_data = json_decode(file_get_contents($api_url),true);

$this->title = 'My Yii Application'; ?>

<div  class="site-index">
    
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-3 pt-3">Weather Yii2 App</h1>
    
        <pre>
        <?php print_r($weather_data);?>

    </div>

    <div class="body-content">
 

    </div>
</div>
