<?php
    include_once("templates/header.php")
?>

<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p id="msg"><?= $printMsg ?></p>
    <?php endif; ?>
    <h1 id="main-title">Minhas matérias</h1>
    <?php if(count($materias) > 0): ?>
        <table class="table" id="materias-table">
            <thead>
                <tr>
                    
                    <th scope="col">Matéria</th>
                    <th scope="col">Data Simulado</th>
                    <th scope="col">Nota Simulado</th>
                    <th scope="col">Data Prova</th>
                    <th scope="col">Nota Prova</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($materias as $materia): ?>
                    <tr>
                       
                        <td scope="row"><?= $materia["nome_materia"] ?></td>
                        <td scope="row"><?= $materia["data_simulado"] ?></td>
                        <td scope="row"><?= $materia["nota_simulado"] ?></td>
                        <td scope="row"><?= $materia["data_prova"] ?></td>
                        <td scope="row"><?= $materia["nota_prova"] ?></td>
                        <td class="actions">
                            <a href="<?= $BASE_URL ?>show.php?id=<?= $materia["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $materia["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                            <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $materia["id"] ?>">
                                <button type="submit" class="delete-btn" ><i class="fas fa-times delete-icon"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">Ainda não há matérias cadastradas, <a href="<?= $BASE_URL ?>create.php">clique aqui para cadastrar</a></p>
    <?php endif; ?>
</div>

<?php
    include_once("templates/footer.php")
?>
