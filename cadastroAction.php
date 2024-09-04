<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - PDO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container w-50">
        <?php
        try {
            include_once("conexao.php");
            $sql = "INSERT INTO amigo (nome, apelido, email)
                VALUES ('{$_POST['txtNome']}', '{$_POST['txtApelido']}', '{$_POST['txtEmail']}')";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo '<a href="index.php"> <h1 class="text-bg-success rounded">Amigo Salvo com sucesso! </h1> </a>';
        } catch (PDOException $e) {
            echo '<a href="index.php"> <h1 class="text-bg-success rounded">';
            echo "Erro no comando: $sql <br /> {$e->getMessage()}";
            echo "</h1> </a>";
        }

        $conn = null;
        ?>
    </div>
</body>

</html>