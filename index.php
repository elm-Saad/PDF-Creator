<?php include 'inc/htmlHead.php' ?>
<body class="font-opensans min-h-screen">  
    <!-- Header -->  
    <?php include 'inc/tailwindNavbar.php' ?>
    <!-- hero Section -->
    <section id="productive" class="mx-auto max-w-7xl min-w-min">
        <div class="flex flex-col items-center mx-auto px-6 pt-16 pb-16 md:flex-row md:space-x-16">
            <!-- Content -->
            <div class="flex flex-col items-start md:w-1/2">
                <div class="flex flex-col space-y-5">
                    <h1 class="text-5xl font-bold text-gradient-to-r from-green-500 to-blue-500">
                        Free PDF Creator
                    </h1>
                    <p class="text-md md:text-lg">
                        Create professional PDF documents in seconds, without any coding required.
                    </p>

                    <p class="text-md md:text-lg">
                        Turn form responses into secure and customizable PDF files instantly.
                    </p>
                </div>

                <!-- Link -->
                <a href="create.php" class="bg-violet-500 hover:bg-violet-600 text-white font-semibold m-4 ml-0 py-4 px-8 rounded-full shadow-lg hover:shadow-xl transition duration-300 ease-in-out inline-block">
                    Generate
                </a>
            
            </div>
            <!-- Image -->
            <div class="md:w-1/2">
                <img
                    src="images/main.png"
                    alt=""
                    class="mb-10"
                />
            </div>
        </div>
    </section>
</body>
</html>