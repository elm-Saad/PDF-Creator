<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Generator</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/Recipe_form_st.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="../js/index.js" defer></script>

</head>
<body class="relative">
    <!-- Header -->
    <?php include '../inc/cssNavbar.php' ?>

    <!-- form -->
    <div class="Recipe-container">
        <h1 class="form-title">Recipe Form</h1>
        <form action="../generate-pdf.php" method="POST" class="recipe-form" enctype="multipart/form-data">
            <input type="hidden" name="template_name" value='Recipe_1'>
            <label for="recipe-title" class="form-label">Recipe Title</label>
            <input type="text" name="recipe_title" id="recipe-title" class="form-input" placeholder="Enter recipe title" required>

            <div class="file-input">
                <label for="recipe-image" class="file-label">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="file-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Upload Recipe Image
                </label>
                <input type="file" id="recipe-image" name='logo' class="file-input" accept="image/*" required>
            </div>

            <label for="recipe-ingredients" class="form-label">Ingredients</label>
            <textarea id="recipe-ingredients" name="recipe_ingredients" class="form-textarea" placeholder="Enter ingredients (one per line)" required></textarea>

            <label for="recipe-instructions" class="form-label">Instructions</label>
            <textarea id="recipe-instructions" name="recipe_instructions" class="form-textarea" placeholder="Enter instructions (one per line)" required></textarea>

            <button type="submit" class="Recipe-form-button">Create Recipe Card</button>
        </form>
    </div>
</body>
</html>