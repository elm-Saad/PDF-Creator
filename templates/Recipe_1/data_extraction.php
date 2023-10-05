<?php

    // Retrieve and sanitize form data
    $recipe_title = sanitizeInput($_POST['recipe_title']);
    $recipe_ingredients = sanitizeInput($_POST['recipe_ingredients']);
    $recipe_instructions = sanitizeInput($_POST['recipe_instructions']);

    $pattern = '/[,\\-_\\n]+/';
    $recipe_ingredients = preg_split($pattern, $recipe_ingredients);
    $recipe_instructions = preg_split($pattern, $recipe_instructions);

 // Handle logo file upload
 if($_FILES['logo']['error'] == 0 && $_FILES['logo']['size'] <= MAX_FILE_SIZE) {

    $uploadedFile = $_FILES['logo'];
    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    $fileExtension = strtolower(pathinfo($uploadedFile['name'], PATHINFO_EXTENSION));

    if (in_array($fileExtension, $allowedExtensions)) {
            
        $uploadDir = 'uploads/';
        $logoPath = $uploadDir . $uploadedFile['name'] .time();

        move_uploaded_file($uploadedFile['tmp_name'], $logoPath);

    }else{
        $logoPath = defaultImagePath;
    }

} else {
    $logoPath = defaultImagePath;
}