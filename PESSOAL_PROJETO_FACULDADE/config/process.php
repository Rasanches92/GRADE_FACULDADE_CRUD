<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    //Modificação no banco
    if(!empty($data)){
        print_r($data);

        //Criar contato
        if($data["type"] === "create"){

            $nome_materia = $data["nome_materia"];
            $data_simulado = $data["data_simulado"];
            $nota_simulado = $data["nota_simulado"];
            $data_prova = $data["data_prova"];
            $nota_prova = $data["nota_prova"];

            $query = "INSERT INTO materias (nome_materia,data_simulado,nota_simulado,data_prova,nota_prova) VALUES (:nome_materia,:data_simulado,:nota_simulado,:data_prova,:nota_prova)";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":nome_materia",$nome_materia);
            $stmt->bindParam(":data_simulado",$data_simulado);
            $stmt->bindParam(":nota_simulado",$nota_simulado);
            $stmt->bindParam(":data_prova",$data_prova);
            $stmt->bindParam(":nota_prova",$nota_prova);

            try{

                $stmt->execute();
                $_SESSION["msg"] = "Matéria adicionada com sucesso!";
    
            } catch (PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }     
        } else if($data["type"] === "edit"){

            $nome_materia = $data["nome_materia"];
            $data_simulado = $data["data_simulado"];
            $nota_simulado = $data["nota_simulado"];
            $data_prova = $data["data_prova"];
            $nota_prova = $data["nota_prova"];
            $id = $data["id"];

            $query = "UPDATE materias 
                      SET nome_materia =:nome_materia, data_simulado =:data_simulado, nota_simulado =:nota_simulado, data_prova =:data_prova, nota_prova =:nota_prova 
                      WHERE id = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":nome_materia",$nome_materia);
            $stmt->bindParam(":data_simulado",$data_simulado);
            $stmt->bindParam(":nota_simulado",$nota_simulado);
            $stmt->bindParam(":data_prova",$data_prova);
            $stmt->bindParam(":nota_prova",$nota_prova);
            $stmt->bindParam(":id",$id);

            try{

                $stmt->execute();
                $_SESSION["msg"] = "Registro atualizado com sucesso!";
    
            } catch (PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }
    

        } else if($data["type"] === "delete"){

            $id = $data["id"];

            $query = "DELETE FROM materias WHERE id = :id";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id",$id);

            try{

                $stmt->execute();
                $_SESSION["msg"] = "Registro deletado com sucesso!";
    
            } catch (PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }

        }

        //REDIRECT HOME
        header("Location:" . $BASE_URL . "../index.php");
        
        } else { 
    
            $id;

            if(!empty($_GET)){
                $id = $_GET["id"];
            }
            //Retorna o dado de uma matéria
                
            if(!empty($id)){
                $query = "SELECT * FROM materias WHERE id = :id";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(":id",$id);
                $stmt->execute();
                $materia = $stmt->fetch();
            
            
            } else {
                //Retorna todas as matérias
                $materias = [];
                $query = "SELECT * FROM materias";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $materias = $stmt->fetchAll();
            }
        }

    //Fechar conexão
    $conn = null;
?>      