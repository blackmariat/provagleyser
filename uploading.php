<html>
    <head>
        <meta charset="UTF-8">
        <title>PROVA</title>
    </head>
    <body>
<?php
$target_diretorio = "downloads/";
$target_arquivo = $target_diretorio . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_arquivo,PATHINFO_EXTENSION));

if ($_FILES["fileToUpload"]["size"] > 2000000) {
	echo "Erro! este arquivo é muito grande. O tamanho máximo é 2GB";
	$uploadOk = 0;
}
?>
        <br><br>
<?php
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
	echo "Desculpe, apenas JPG, JPEG, PNG & GIF.";
	$uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Erro! Esse arquivo não é suportado";
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_arquivo)) {
        echo "O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " foi adicionado com sucesso.";
    } else {
        echo "Erro no upload do arquivo.";
    }
}
?>
</body>
</html>
