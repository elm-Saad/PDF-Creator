<?php
// Define an array of card data
$cardData = [
    [
        'title' => 'Invoice',
        'image' => 'images/invoice_img.jpg',
        'link' => 'forms/Invoice_form.php',
    ],
    [
        'title' => 'Recipe Card',
        'image' => 'images/recipe_img.jpg',
        'link' => 'forms/Recipe_form.php',
    ],
    [
        'title' => 'coming soon',
        'image' => 'images/coming_soon.jpg',
        'link' => 'create.php',
    ],
    // Add more card data as needed
];

// Loop through the card data and generate cards
foreach ($cardData as $data):
?>
    <div class="p-4">
        <h2 class="text-center font-bold text-xl"><?php echo $data['title']; ?></h2>
        <div class="overflow-hidden border border-gray-300 rounded-md mx-auto mt-4 mb-4 w-98 h-60">
            <div class="relative w-full h-full bg-white">
                <img src=<?php echo $data['image']; ?> alt="Image Description" class="w-full absolute top-0 transform transition-transform duration-1000 ease-in-out delay-200 hover:-translate-y-2/3" />
            </div>
        </div>
        <a href=<?php echo $data['link']; ?> class="block w-full border border-violet-400 text-violet-400 hover:text-white bg-transparent hover:bg-violet-400 transition-all duration-300 font-bold py-2 rounded-md text-center text-decoration-none">Use Template</a>
    </div>
<?php endforeach; ?>

