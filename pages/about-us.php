<?php include '../logic/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | EstVic Studios</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fadeIn {
            opacity: 0;
            animation: fadeIn 1s ease-out forwards;
        }

        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

<!-- Header Section -->
<header class="bg-white shadow-sm">
    <div class="container mx-auto px-6 py-12 text-center">
        <h1 class="text-4xl md:text-5xl font-bold gradient-text animate-fadeIn">About EstVic Studios</h1>
        <p class="text-gray-600 mt-4 max-w-2xl mx-auto animate-fadeIn" style="animation-delay: 0.2s;">
            Building digital products that inspire and deliver impact.
        </p>
    </div>
</header>

<!-- About Section -->
<section class="container mx-auto px-6 py-16 max-w-4xl space-y-12">
    <!-- Company Story -->
    <div class="animate-fadeIn">
        <h2 class="text-2xl font-bold mb-4">Who We Are</h2>
        <p class="text-lg leading-relaxed text-gray-700">
            EstVic Studios was founded by two passionate developers—Victor Karanja and Esther Ng’ang’a—with a shared vision of delivering elegant, functional, and innovative digital solutions. With over <strong>3 years</strong> of excellence, we’ve grown from a two-person team to a creative digital force dedicated to empowering startups, businesses, and entrepreneurs with reliable web and mobile solutions.
        </p>
    </div>

    <!-- Mission & Vision -->
    <div class="grid md:grid-cols-2 gap-8 animate-fadeIn" style="animation-delay: 0.2s;">
        <div class="bg-blue-50 rounded-xl p-6 shadow-md">
            <h3 class="text-xl font-semibold mb-2 text-blue-600">Our Mission</h3>
            <p>
                To deliver cutting-edge digital products that elevate our clients' brands and ensure smooth, enjoyable user experiences.
            </p>
        </div>
        <div class="bg-purple-50 rounded-xl p-6 shadow-md">
            <h3 class="text-xl font-semibold mb-2 text-purple-600">Our Vision</h3>
            <p>
                To become a leading tech studio in Africa, known for innovation, quality, and customer-first solutions that solve real-world problems.
            </p>
        </div>
    </div>

    <!-- Core Values -->
    <div class="animate-fadeIn" style="animation-delay: 0.4s;">
        <h2 class="text-2xl font-bold mb-4">Our Core Values</h2>
        <ul class="grid sm:grid-cols-2 gap-4 list-disc pl-6 text-gray-700">
            <li><strong>Integrity</strong> – Doing the right thing, always.</li>
            <li><strong>Innovation</strong> – Embracing creativity and growth.</li>
            <li><strong>Teamwork</strong> – We succeed together.</li>
            <li><strong>Excellence</strong> – Every detail matters.</li>
        </ul>
    </div>

    <!-- Timeline -->
    <div class="animate-fadeIn" style="animation-delay: 0.6s;">
        <h2 class="text-2xl font-bold mb-4">Our Journey</h2>
        <ol class="border-l-4 border-blue-500 pl-6 space-y-6">
            <li>
                <span class="text-sm text-gray-500">2022</span>
                <h4 class="font-semibold text-lg">EstVic Studios was founded</h4>
                <p class="text-gray-600">Victor and Esther launched EstVic to build custom digital experiences for local clients.</p>
            </li>
            <li>
                <span class="text-sm text-gray-500">2023</span>
                <h4 class="font-semibold text-lg">Expanded Services</h4>
                <p class="text-gray-600">Added UI/UX design, backend APIs, mobile development, and eCommerce support.</p>
            </li>
            <li>
                <span class="text-sm text-gray-500">2024</span>
                <h4 class="font-semibold text-lg">International Clients & Partnerships</h4>
                <p class="text-gray-600">Worked with clients across Africa and beyond, creating scalable, secure applications.</p>
            </li>
        </ol>
    </div>
</section>

<!-- Call to Action -->
<section class="text-center py-12 bg-gradient-to-r from-blue-500 to-pink-500 text-white animate-fadeIn" style="animation-delay: 0.8s;">
    <h2 class="text-3xl font-bold mb-4">Ready to Build With Us?</h2>
    <p class="text-lg mb-6">Let’s bring your vision to life with powerful design and robust code.</p>
    <a href="/contact.php" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-full shadow hover:bg-gray-100 transition">Contact Us</a>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-6 text-center">
        <p>© <?= date('Y') ?> EstVic Studios. All rights reserved.</p>
    </div>
</footer>

<script>
    // Simple fadeIn on scroll effect
    document.addEventListener('DOMContentLoaded', () => {
        const fadeEls = document.querySelectorAll('.animate-fadeIn');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.animationDelay = entry.target.getAttribute('style')?.split('animation-delay:')[1] || '0s';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        fadeEls.forEach(el => observer.observe(el));
    });
</script>

</body>
</html>
