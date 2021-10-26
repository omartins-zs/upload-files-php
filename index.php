<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Upload de Arquivos</title>
</head>

<body>
    <div class="container">

        <?php
        if (isset($_POST['action'])) {
            // Formulario foi enviado!!!
            $arquivo = $_FILES['file'];

            $arquivoNovo = explode('.', $arquivo['name']);

            if ($arquivoNovo[sizeof($arquivoNovo) - 1] != 'jpg') {
                die('Voce nao pode fazer upload desse tipo de arquivo');
            } else {
                echo 'Upload foi feito com sucesso....';
                move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $arquivo['name']);
            }
        }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <input class="form-control-sm" type="file" name="file" id="" />
            <input class="btn btn-primary" name="action" type="submit" value="Enviar" />
        </form>
    </div>
</body>

</html>