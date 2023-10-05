<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Template</title>
    <style>
        body {
            background-color: #fffaf7;
        }
        .recipe-container{
            overflow: auto;
            width:100%;
        }

        .recipe-image {
            float: right;
            width: 40%;
            height:100%;
        }

        .recipe-image img {
            width: 100%;
            height: 100%;
            display: block;
        }
        .recipe-image::before {
            content: "";
            display: block;
            width: 2px;
            height: 100%;
            background-color: #df9165;
            margin-left: -10px;
            float: left;
        }
        .recipe-content {
            float: left;
            width: 56%;
            padding: 1rem;
            padding-right:0;
        }

        .recipe-title {
            font-size: 2rem;
            font-weight: bold;
            color:#9c4716;
            margin:0;
            border-bottom: 2px solid #df9165;
            padding-bottom: 10px;
        }

        .recipe-ingredients ,
        .recipe-instructions {
            font-size: 18px;
            margin-top: 5px;
        }
        .recipe-ingredients h2,
        .recipe-instructions h2{
            color:#df9165;
        }

        .recipe-instructions ul,
        .recipe-ingredients ul{
            list-style-type: disc;
            padding-left: 1rem;
            color:#a04815;
            line-height:1.4rem;        
        }
    </style>
</head>
<body>
    <div class="recipe-container">
        <div class="recipe-image">
            <img src="<?php echo $logoPath; ?>" alt="Image of the dish">
        </div>
        <div class="recipe-content">
            <div class="recipe-title"><?php echo $recipe_title; ?></div>
            <div class="recipe-ingredients">
                <h2>Ingredients</h2>
                <ul>
                    <?php foreach ($recipe_ingredients as $ingredient) : ?>
                        <li><?php echo $ingredient; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="recipe-instructions">
                <h2>Instructions</h2>
                <ul>
                    <?php foreach ($recipe_instructions as $instruction) : ?>
                        <li><?php echo $instruction; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>