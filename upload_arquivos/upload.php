<?php 

$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "arquivo válido e enviado com sucesso.\n";
    echo "http://camposwebsolutions.com.br/upload_arquivos/". $uploadfile;
} else {
    echo "erro\n";
}
echo 'Aqui está mais informações de debug:';
print_r($_FILES);
echo "<br>";
print_r($uploaddir);

print "</pre>";