<?php
    include_once("templates/header.php")
?>

    <div class="container">
        <?php include_once("templates/backbtn.html");?>
        <h1 id="main-title">Inserir disciplina</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome da matéria:</label>
                <input type="text" class="form-control" id="nome_materia" name="nome_materia" placeholder="Digite a matéria" required>
            </div>
            <div class="form-group">
                <label for="phone">Data do simulado:</label>
                <input type="text" class="form-control" id="data_simulado" name="data_simulado" placeholder="Digite a data do simulado" required>
            </div>
            <div class="form-group">
                <label for="phone">Nota do simulado:</label>
                <input type="text" class="form-control" id="nota_simulado" name="nota_simulado" placeholder="Insira a nota do simulado" required>
            </div>
            <div class="form-group">
                <label for="phone">Data da prova:</label>
                <input type="text" class="form-control" id="data_prova" name="data_prova" placeholder="Digite a data da prova" required>
            </div>
            <div class="form-group">
                <label for="phone">Nota da prova:</label>
                <input type="text" class="form-control" id="nota_prova" name="nota_prova" placeholder="Insira a nota da prova" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

<?php
    include_once("templates/footer.php")
?>
