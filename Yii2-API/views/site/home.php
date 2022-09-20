<?php
use yii\httpclient\Client;

/** @var yii\web\View $this */

$api_key = 'cce36086c4d44b8dd07cf495ec7e7c60';
$city = 'Jordan';

$api_url =
    'https://api.openweathermap.org/data/2.5/weather?q=Jordan&appid=' .
    $api_key .
    '&units=metric';

$weather_data = json_decode(file_get_contents($api_url));

$url =
    'http://openweathermap.org/img/w/' .
    $weather_data->weather[0]->icon .
    '.png';

$this->title = 'My Yii Application';
?>

     <div  class="site-index">
        <div class="jumbotron text-center bg-transparent d-flex flex-column align-items-center ">
            <h1 class="display-2 pt-3">Weather App</h1>
              <section class="container-fluid">
                <form class="mt-5 d-flex justify-content-end">
                 <input type="text" />
                 <button class= "btn btn-primary"> search</button>
                </form>
              </section>
            <section class="mt-5 h-100 w-100">
            <div class="container text-center">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0 ">
                <div class="col-md-4">
                  <img src=<?php echo 'http://openweathermap.org/img/w/' .
                      $weather_data->weather[0]->icon .
                      '.png'; ?> class="img-fluid rounded-start h-100 w-100" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $weather_data->name; ?></h5>
                      <p class="card-text"><?php echo $weather_data->main
                          ->temp . ' C'; ?></p>
                      <p class="card-text"><small class="text-muted"><?php echo $weather_data
                          ->weather[0]->description; ?></small></p>
                  </div>
                </div>
              </div>
             </div> 
            </div>  
         </section>
        </div>
    </div>
    





