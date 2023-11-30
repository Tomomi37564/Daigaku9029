<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <title>Cadastro</title>
</head>
<body>
    <?php
        require_once 'conexao.php';

        if($_POST){
            $gamertag = $_POST['gamertag'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $birthday = $_POST['birthday'];
            $password = $_POST['password'];
            $sql = "insert into user values (default, '$gamertag', '$name', '$surname', '$email', '$birthday', '$password');";

            if($conexao -> query($sql)){
                echo "<h1 id='resp'>Sucesso!</h1>";
            }else{
                echo "Erro: ".$sql." ".$conexao -> connect_error;
            }

            $conexao -> close();
        }
    ?>
</body>
</html>