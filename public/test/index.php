<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .error {
            color: red;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <h1>Form</h1>
    <form action="index.php" method="POST" novalidate>
        Nome: <input type="text" name="nome"> <br> <br>
        E-mail: <input type="email" name="email"> <br> <br>
        Comentário: <textarea name="comentario" id="" cols="30" rows="10"></textarea> <br> <br>
        Gênero: <input type="radio" name="gen"> Feminino
        <input type="radio" name="gen"> Masculino
        <input type="radio" name="gen"> Outros
        <br><br>
        <button name="enviado" type="submit">Enviar</button>
    </form>


    <h1>Dados enviados</h1>





    <?php
    if (isset($_POST['enviado'])) {
        var_dump($_POST, empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100);

        if (empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100) {
            echo "eu";
            echo '<p class="error">Preencha o campo nome</p>';
            die();
        }

        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo '<p class="error">Preencha o campo email</p>';
            die();
        }
    }
    ?>



</body>

</html>