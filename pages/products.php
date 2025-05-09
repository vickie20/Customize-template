<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../logic/navbar.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .service-card {
            transition: all 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .read-more {
            position: relative;
            display: inline-block;
        }
        .read-more::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #3b82f6;
            transition: width 0.3s ease;
        }
        .read-more:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Our Services</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">We offer comprehensive solutions to help your business grow in the digital world</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Product Development Card -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-md p-8">
                <div class="mb-6">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Product Development</h3>
                    <p class="text-gray-600 mb-6">We've designed a culture that allows our stewards to assimilate</p>
                    <a href="#" class="read-more text-blue-600 font-medium">READ MORE →</a>
                </div>
            </div>

            <!-- UI/UX Designing Card -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-md p-8">
                <div class="mb-6">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">UI/UX Designing</h3>
                    <p class="text-gray-600 mb-6">We've designed a culture that allows our stewards to assimilate</p>
                    <a href="#" class="read-more text-blue-600 font-medium">READ MORE →</a>
                </div>
            </div>

            <!-- Digital Marketing Card -->
            <div class="service-card bg-white rounded-lg overflow-hidden shadow-md p-8">
                <div class="mb-6">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Digital Marketing</h3>
                    <p class="text-gray-600 mb-6">We've designed a culture that allows our stewards to assimilate</p>
                    <a href="#" class="read-more text-blue-600 font-medium">READ MORE →</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>