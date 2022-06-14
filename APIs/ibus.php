<?php require_once('.\header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <p class="fs-2 bg-dark text-center text-white">Buscador por parada</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 mx-3 px-3">
            <div class="card">
                <div class="card-body mx-2">
                    <?php
                    require_once 'parada.php';
                    if (isset($_GET['submit-parada'])) {
                        $codigo = $_GET['codigo'];
                        if (in_array($codigo, $result)) {
                            $URL = "https://api.tmb.cat/v1/ibus/stops/" . $codigo . "?app_id=beaa6796&app_key=1ab3c63d0b6152e4e9f72021ef644b37";
                            $response = json_decode(file_get_contents($URL), true);
                            $route = $response['data']['ibus'][0]['routeId'];
                            $linea = $response['data']['ibus'][0]['line'];
                            $destino = $response['data']['ibus'][0]['destination'];
                            $minutos = $response['data']['ibus'][0]['text-ca'];
                            echo '<h5 class="card-title">Código linea ' . $route . ' </h5>';
                            echo '<p class="fs-3">Linea ' . $linea . ' - ' . $destino . '</p>';
                            echo '<p class="card-text">Siguiente bus en ' . $minutos . '</p>';
                        } else {
                            echo "No existe la parada";
                        }
                    }
                    ?>
                    <a href="#" class="btn btn-primary">Ver ubicación parada</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mx-3 px-3">
            <form action="" method="GET">
                <div class="form-group">
                    <label class="my-2" for="parada">Código parada</label>
                    <input type="text" class="form-control" id="parada" name="codigo" aria-describedby="codparada" placeholder="Introduce el código">
                </div>
                <button type="submit" name="submit-parada" class="btn btn-primary my-3">Buscar</button>
            </form>
        </div>
    </div>
</div>


<?php require_once('.\footer.php'); ?>