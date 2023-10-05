<?php include 'inc/htmlHead.php' ?>
<body class="relative min-h-screen">
    <!-- Header -->
    <?php include 'inc/tailwindNavbar.php' ?>
    <!-- hero Section -->
    <section id="productive" class="mx-auto max-w-7xl">
        <div class="text-center mt-16">
            <h1 class="text-4xl font-semibold mb-4">PDF Templates</h1>
            <p class="text-lg text-gray-400 pl-8 pr-8">Choose from a variety of templates to create the perfect PDF for your needs.</p>
        </div>
        <div class="mx-auto px-6 pt-8 pb-16">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3">
                <!-- Templates cards -->
                <?php include 'inc/templateCard.php' ?>
            </div>
        </div>
</body>
</html>


