<?php
    include_once("templates/header.php")
?>

    <div class="container">
        <?php include_once("templates/backbtn.html");?>
        <h1 id="main-title">Editar disciplina</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $materia['id'] ?>">
            <div class="form-group">
                <label for="name">Nome da matéria:</label>
                <input type="text" class="form-control" id="nome_materia" name="nome_materia" placeholder="Digite a matéria" value="<?= $materia["nome_materia"] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Data do simulado:</label>
                <input type="text" class="form-control" id="data_simulado" name="data_simulado" placeholder="Digite a data do simulado" value="<?= $materia["data_simulado"] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Nota do simulado:</label>
                <input type="text" class="form-control" id="nota_simulado" name="nota_simulado" placeholder="Insira a nota do simulado" value="<?= $materia["nota_simulado"] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Data da prova:</label>
                <input type="text" class="form-control" id="data_prova" name="data_prova" placeholder="Digite a data da prova" value="<?= $materia["data_prova"] ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Nota da prova:</label>
                <input type="text" class="form-control" id="nota_prova" name="nota_prova" placeholder="Insira a nota da prova" value="<?= $materia["nota_prova"] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

<?php
    include_once("templates/footer.php")
?>
