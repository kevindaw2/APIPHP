<?php require_once('.\header.php'); ?>
<div class="container">
    <div class="row my-3">
        <div class="col">
            <p class="fs-2 bg-dark text-center text-white">Tiempo por ciudad</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 mx-3 px-3">
            <div class="card">
                <div class="card-body mx-2">
                    <?php
                    $apikey = "39506f6b6fed0dfdaa63e834ae79e261";
                    require_once 'parada.php';
                    if (isset($_GET['submit-tiempo'])) {
                        $ciudad = $_GET['ciudad'];

                        $URL = "http://api.openweathermap.org/data/2.5/weather?q=" . $ciudad . "&appid=" . $apikey;
                        $response = json_decode(file_get_contents($URL), true);

                        $temperatura = $response['main']['temp'];
                        $temperaturaC = round($temperatura - 273.15);
                        $actual = $response['weather'][0]['main'];
                        $image = $response['weather'][0]['icon'];
                        $nombre = $response['name']; 

                        echo '<h5 class="card-title">' . $temperaturaC . "ºC " .  $actual .' </h5>';
                        echo '<p class="fs-3">' . $nombre . '</p>';
                        echo '<img src=" http://openweathermap.org/img/wn/10d@2x.png" />'; 
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mx-3 px-3">
            <form action="" method="GET">
                <div class="form-group">
                    <label class="my-2" for="ciudad">Nombre de la ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" aria-describedby="cityname" placeholder="Introduce una ciudad">
                </div>
                <button type="submit" name="submit-tiempo" class="btn btn-primary my-3">Buscar</button>
            </form>
        </div>
    </div>
</div>
<?php require_once('.\footer.php'); ?>