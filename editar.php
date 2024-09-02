<?php
// Função para redimensionar uma imagem
function resizeImage($sourcePath, $destinationPath, $newWidth, $newHeight) {
    // Cria uma nova imagem a partir do arquivo
    list($width, $height) = getimagesize($sourcePath);
    $sourceImage = imagecreatefromjpeg($sourcePath);

    // Cria uma nova imagem em branco
    $newImage = imagecreatetruecolor($newWidth, $newHeight);

    // Redimensiona a imagem
    imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    // Salva a nova imagem
    imagejpeg($newImage, $destinationPath);

    // Libera a memória
    imagedestroy($sourceImage);
    imagedestroy($newImage);
}

// Exemplo de uso
resizeImage('source.jpg', 'resized.jpg', 200, 200);
?>
