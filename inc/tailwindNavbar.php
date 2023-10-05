<!-- Header -->
<header class="mx-auto pt-5 px-6 max-w-7xl min-w-min text-center h-40 md:h-20 flex flex-col lg:flex-row justify-between items-center">
    <!--  Logo -->
    <div class="h-16 w-16 mx-auto md:mx-0">
        <img class="w-full h-full" src="images/logo_1.png" alt="schedule logo">
    </div>
    <!-- Menu -->
    <div class="flex items-center justify-center space-x-4 md:space-x-10">
        <a href="index.php"  class="hover:text-violet-500 font-500 transition-colors">Home</a>
        <a href="create.php" class="hover:text-violet-500 font-500 transition-colors">Templates</a>
        <a href="contact.php" class="hover:text-violet-500 font-500 transition-colors">contact</a>

        <!-- Dark/Light Mode Button -->
        <button 
            id="theme-toggle"
            class="bg-white text-gray-800 hover:bg-gray-300 hover:text-white p-1 border rounded-lg"
        >
            <!-- SVG Icon -->
            <svg
                class="w-5 h-5"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                >
                </path>
            </svg>
        </button>
    </div>
</header>