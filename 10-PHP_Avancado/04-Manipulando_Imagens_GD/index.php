<?php
    $imagem = "07.png";
    $imagem_mini = "mini_imagem.png";

    list($width , $height) = getimagesize($imagem);
    list($width_mini, $height_mini) = getimagesize($imagem_mini);

    $imagem_final = imagecreatetruecolor($width, $height);

    $imagem_original = imagecreatefrompng("07.png");
    $mini = imagecreatefrompng("mini_imagem.png");

    imagecopy($imagem_final, $imagem_original, 0,0,0,0, $width, $height);

    imagecopy($imagem_final, $mini, 200,400,0,0, $width_mini, $height_mini);

    //salva caminho com nome da imagem
    imagepng($imagem_final, "imagem_marca_dagua.png");

    echo "Imagem criada com sucesso";
?>
