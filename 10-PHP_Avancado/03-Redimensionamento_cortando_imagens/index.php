<?php 
	$filename = "08.png";
	$width = 200;
	$height = 200;

	list($width_origin , $height_origin) = getimagesize($filename);

	$ratio = $width_origin / $height_origin;

	if($width / $height > $ratio){
		$width = $height * $ratio;
	}else{
		$height = $width / $ratio;
	}

	
	//Criando uma nova imagem.

	$image = imagecreatetruecolor($width, $height);

	$image_origin = imagecreatefrompng($filename);

	//coverte a imagem original para tamanho da nova imagem

	imagecopyresampled($image , $image_origin, 0,0,0,0, $width, $height , $width_origin, $height_origin);

	//mostrar a imagem , não pode usar echo no codigo;
	//header("Content-Type: image/png");
	//imagepng($image , null);


	//passa o nome da imagem com caminho para salvar
	imagepng($image , "mini_imagem.png");

	echo "Imagem redimenciona com sucesso";
?>