<?php include 'inc/htmlHead.php' ?>
<body class=" relative font-opensans min-h-screen">  
    <!-- Header -->  
    <?php include 'inc/tailwindNavbar.php' ?>

    <div class="isolate max-w-screen-md mx-auto border border-gray-300 shadow-lg rounded-lg my-16 bg-white py-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Get in Touch with Me</h2>
        </div>
        <form action="send_email.php" method="post" class="mx-auto mt-8 max-w-xl p-4">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                    <div class="mt-2.5">
                        <input 
                            type="text"
                            name="first_name"
                            id="first-name"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required
                        >
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last name</label>
                    <div class="mt-2.5">
                        <input 
                            type="text" 
                            name="last_name"
                            id="last-name" 
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        >
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input 
                            type="email"
                            name="email"
                            id="email"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                        >
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea 
                            name="message"
                            id="message"
                            rows="4"
                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            rerequired
                        >
                        </textarea>
                    </div>
                </div>
                </div>
                <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-violet-700 hover:bg-violet-800 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-violet-700">Let's talk</button>
            </div>
        </form>
    </div>
    <!-- Pop-up message container (hidden by default) -->
    <div id="popup" class="fixed top-0 left-1/2 mt-8 transform -translate-x-1/2 -translate-y-0 p-4 shadow-lg rounded-lg flex items-center justify-center z-50  w-48 h-62 hidden">
        <div class="rounded-lg p-0 text-gray-700"> 
            <h2 class="text-base font-semibold mb-2" id="popup-message"></h2>
            <p class="text-gray-700" id="popup-details"></p>
        </div>
    </div>
    
    <script>
        // JavaScript code to handle the pop-up message
        const params = new URLSearchParams(window.location.search);
        const status = params.get("status");
        const message = params.get("message");

        const popup = document.getElementById("popup");
        const popupMessage = document.getElementById("popup-message");
        const popupDetails = document.getElementById("popup-details");

        if (status === "success") {
            popupMessage.textContent = "message sent successfully!";
            popup.classList.add("bg-green-100");
        } else if (status === "error") {
            popupMessage.textContent = "message could not be sent.";
            popup.classList.add("bg-red-100");
        }

        if (status === "success" || status === "error") {
            popupDetails.textContent = message;
            popup.classList.remove("hidden");
            
            // Hide the popup after 3 seconds
            setTimeout(() => {
                popup.classList.add("hidden");
                window.history.replaceState({}, document.title, window.location.pathname);
            }, 2500);
        }
    </script>
</body>
</html>
