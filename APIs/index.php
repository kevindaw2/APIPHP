<?php require_once('.\header.php'); ?>

<div class="container">
    <div class="row my-3">
        <div class="col">
            <p class="fs-2 bg-dark text-center text-white">Manejo API profes</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <div style="float:left; width:50%;">
        <h1>Buscador</h1>
        <p class="message box"> Mensaje</p>
        <p><button id="getMessage"> Obtener mensaje </button></p>
    </div>


    <div style="float:right; width:50%;">
        <h1>Post</h1>
        <form id="apiform">

            <input type="text" name="title" placeholder="title" autocomplete="on"><br>
            <textarea name="body" id="" cols="30" rows="10" placeholder="body" autocomplete="on"></textarea><br>
            <input type="text" name="author" placeholder="author" autocomplete="on"><br>
            <input type="text" name="category_id" placeholder="category_id" autocomplete="on"><br><br>

            <button id="postMessage"> Post Message </button>
        </form>
    </div>

        </div>
    </div>
</div>
<?php require_once('.\footer.php'); ?>