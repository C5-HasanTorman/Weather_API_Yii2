<?php
use yii\httpclient\Client;
use yii\helpers\Html;

/** @var yii\web\View $this */

$api_url =
    'https://api.openweathermap.org/data/2.5/weather?q=Jordan&appid=cce36086c4d44b8dd07cf495ec7e7c60&units=metric';
$weather_data = json_decode(file_get_contents($api_url));

$this->title = 'My Yii Application';
?>

    <div  class="site-index">
        <div class="jumbotron text-center bg-transparent d-flex flex-column align-items-center ">
            <h1 class="display-3 pt-3">Weather Yii2 App</h1>
            <form class="mt-5">
                <input type="text"/>
                <button class= "btn btn-primary"> search</button>
            </form>
            <div class="card d-flex mt-5 ms-5" style="width: 18rem;">
            <img src="..." class="card-img-top"/>
            <div class="card-body">                 
        <h5 class="card-title"> <?php print_r($weather_data->name); ?> </h5>
        <p class="card-text"> <?php print_r($weather_data->main->temp); ?>  </p>
    </div>
    </div>


        </div>
        <div class="body-content">
    

        </div>
    </div>



