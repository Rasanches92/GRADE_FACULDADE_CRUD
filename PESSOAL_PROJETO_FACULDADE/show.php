<?php
    include_once("templates/header.php")
?>

<div class="container" id="view-materia-container">
    <?php include_once("templates/backbtn.html");?>
    <h1 id="main-title"><?= $materia["nome_materia"] ?></h1>
    <p class="bold">Data do Simulado</p>
    <p><?= $materia["data_simulado"] ?></p>
    <p class="bold">Nota do Simulado</p>
    <p><?= $materia["nota_simulado"] ?></p>
    <p class="bold">Data da Prova</p>
    <p><?= $materia["data_prova"] ?></p>
    <p class="bold">Nota da Prova</p>
    <p><?= $materia["nota_prova"] ?></p>
</div>


<?php
    include_once("templates/footer.php")
?>
