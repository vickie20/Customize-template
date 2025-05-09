<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optitech - IT Solutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-white text-gray-800">

    <!-- Navbar -->
    <?php include 'logic/navbar.php'; ?>

    <main>

        <!-- Hero Section -->
        <section class="bg-gray-50 py-20">
            <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-10">

                <!-- Text Content -->
                <div class="md:w-1/2 space-y-6">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                        IT Solutions for your Business
                    </h1>
                    <p class="text-lg text-gray-600">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
    <a href="pages/about-us.php">
        <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md transition">
            Learn more
        </button>
    </a>
    <a href="pages/comming_soon.php">
        <button class="border border-gray-300 hover:border-blue-600 hover:text-blue-600 px-6 py-3 rounded-md transition flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
            </svg>
            Watch Video
        </button>
    </a>
</div>

                </div>

                <!-- Image with layered background -->
                <div class="relative w-64 h-64 sm:w-80 sm:h-80 md:w-96 md:h-96 group">
                    <!-- Gradient Background -->
                    <div class="absolute inset-0 transform rotate-45 bg-gradient-to-tr from-blue-500 to-cyan-400 rounded-3xl scale-110 z-0 transition-transform duration-500 group-hover:scale-125"></div>

                    <!-- White Overlay -->
                    <div class="absolute inset-0 transform rotate-45 bg-white rounded-2xl z-10 shadow-lg"></div>

                    <!-- Image -->
                    <div class="absolute inset-0 transform rotate-45 overflow-hidden z-20">
                        <img src="assetts/hero-it.jpg" 
                             alt="Team working on IT solutions"
                             class="w-full h-full object-cover rounded-xl shadow-md transition duration-500 group-hover:scale-105 -rotate-45">
                    </div>

                    <!-- Decorative Arrow -->
                    <div class="absolute bottom-2 left-2 z-30">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                             class="w-6 h-6 text-blue-700 animate-pulse">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </div>
                </div>

            </div>
        </section>

    </main>
    
</body>
</html>
