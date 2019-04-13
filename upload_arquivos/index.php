<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upando arquivos</title>
</head>

<body>
    <center>
        <h1>Upando os arquivos através do php</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            

            Enviar esse arquivo:
            <br><br>
            <input name="userfile" type="file" />
            <br><br><br>
            <input type="submit" value="Enviar arquivo" />
        </form>
    </center>
</body>

</html>