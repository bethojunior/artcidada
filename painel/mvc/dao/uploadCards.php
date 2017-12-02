<script src="../../js/functions.js"></script>
<link href="../../css/loader.css" rel="stylesheet">
<?php
    require "../service/conexao.php";
    require "../lib/WideImage.php";

    if(isset($_POST['titulo']) || isset($_POST['texto']) || isset($_POST['imagem'])){
        $titulo = $_POST['titulo'];
        $texto = $_POST['texto'];
        $imgExt = strtolower(pathinfo($_FILES['imagem']['name'],PATHINFO_EXTENSION));
        $imagem =$titulo.".".$imgExt;
    }
    if($titulo == "" || $texto== ""){
        echo "Você precisa preencher todos os dados corretamentes. Por favor, tente de novo";
        echo "<script>updateCardsFailed()</script>";
        echo "<h1><center>Desculpe, houve algum erro</center></h1>";
    } else {
        $sql = "INSERT INTO cards (titulo , texto , imagem) VALUES ('$titulo' , '$texto' , '$imagem')";
        $exc = mysqli_query($conexao , $sql);
        echo "<div class='loader'></div>";
        echo "<script>updateCardsSuccess()</script>";

    }

// UPLOAD IMAGENS //////////////////////
    uploadImage($_FILES['imagem'],$titulo);
    function uploadImage($files, $titulo){
    $imgFile = $files['name'];
    $tmp_dir = $files['tmp_name'];
    $imgSize = $files['size'];
    if(!empty($imgFile)){
        $upload_dir = '../../../uploadCards/'; // diretório de uploadp

        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // pega ext da imagem

        // verifica extensão da imagem
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); //valida ext

        // RENOMEAR IMAGEM
        $userpic = $titulo.".".$imgExt;

        if(in_array($imgExt, $valid_extensions)){
            // Check file size '5MB'
            if($imgSize < 5000000)    {
                move_uploaded_file($tmp_dir,$upload_dir.$userpic);

                //IMAGENS SMALL

                $img = WideImage::load($upload_dir.$userpic);
                //REDIMENCIONAR IMAGEM
                $red = $img->resize(50,50);
                //SALVANDO EM QUALQUER FORMATO
                $red->saveToFile($upload_dir.'small/'.$userpic);


                //IMAGENS MEDIUM

                $img = WideImage::load($upload_dir.$userpic);
                //REDIMENCIONAR IMAGEM
                $red = $img->resize(300,300);
                //SALVANDO EM QUALQUER FORMATO
                $red->saveToFile($upload_dir.'medium/'.$userpic);

            }
            else{
                $errMSG = "<h1><strong><center>Desculpe, sua imagem é muito grande.</center></strong></h1>";
            }
        }
        else{
            $errMSG = "<h1><strong><center>Desculpe, apenas JPG, JPEG, PNG & GIF.</center></strong></h1>";
        }
    }

    else{
        echo '<h1><center><strong>Desculpe, algo deu errado, favor tente novamente...</strong></center></h1>';
        echo '<script>FailedFotos()</script>';
    }
}