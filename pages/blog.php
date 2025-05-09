<?php
// blogs-data.php - Sample data for blogs and testimonials
$blogs = [
    [
        'id' => 1,
        'title' => '10 Essential Features for Your E-Commerce Website in 2024',
        'excerpt' => 'Discover the must-have features that will make your e-commerce platform stand out and convert visitors into customers.',
        'image' => 'https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'category' => 'Web Development',
        'date' => 'May 15, 2024',
        'url' => 'blogs/ecommerce-features',
        'reading_time' => '5 min read'
    ],
    [
        'id' => 2,
        'title' => 'Flutter vs React Native: Choosing the Right Mobile Framework',
        'excerpt' => 'A comprehensive comparison of the two most popular cross-platform mobile development frameworks.',
        'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'category' => 'Mobile Development',
        'date' => 'April 28, 2024',
        'url' => 'blogs/flutter-vs-react',
        'reading_time' => '7 min read'
    ],
    [
        'id' => 3,
        'title' => 'Optimizing Website Performance: A Developer\'s Checklist',
        'excerpt' => 'Practical techniques to speed up your website and improve user experience.',
        'image' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'category' => 'Web Development',
        'date' => 'April 10, 2024',
        'url' => 'blogs/performance-optimization',
        'reading_time' => '6 min read'
    ],
    [
        'id' => 4,
        'title' => 'The Future of Progressive Web Apps (PWAs)',
        'excerpt' => 'How PWAs are bridging the gap between web and mobile applications and why you should consider them.',
        'image' => 'https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'category' => 'Mobile Development',
        'date' => 'March 22, 2024',
        'url' => 'blogs/pwa-future',
        'reading_time' => '4 min read'
    ],
    [
        'id' => 5,
        'title' => 'Building Scalable Backends with Node.js and MongoDB',
        'excerpt' => 'Architecture patterns and best practices for creating robust backend systems.',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'category' => 'Backend Development',
        'date' => 'March 5, 2024',
        'url' => 'blogs/scalable-backends',
        'reading_time' => '8 min read'
    ],
    [
        'id' => 6,
        'title' => 'UI/UX Trends That Will Dominate in 2024',
        'excerpt' => 'Stay ahead of the curve with these emerging design trends for web and mobile applications.',
        'image' => 'https://images.unsplash.com/photo-1541462608143-67571c6738dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'category' => 'Design',
        'date' => 'February 18, 2024',
        'url' => 'blogs/ui-ux-trends',
        'reading_time' => '5 min read'
    ]
];

$testimonials = [
    [
        'name' => 'Sarah Johnson',
        'company' => 'TechStart Inc.',
        'role' => 'CEO',
        'rating' => 5,
        'comment' => 'The web development team delivered our e-commerce platform ahead of schedule with exceptional quality. Their attention to detail and proactive communication made the entire process smooth.',
        'avatar' => 'https://randomuser.me/api/portraits/women/43.jpg'
    ],
    [
        'name' => 'Michael Chen',
        'company' => 'Global Retail Solutions',
        'role' => 'CTO',
        'rating' => 4,
        'comment' => 'Our mobile app developed by this team has significantly improved our customer engagement. The only reason for 4 stars is that we had a minor delay in the initial timeline.',
        'avatar' => 'https://randomuser.me/api/portraits/men/32.jpg'
    ],
    [
        'name' => 'Emily Rodriguez',
        'company' => 'HealthTrack',
        'role' => 'Product Manager',
        'rating' => 5,
        'comment' => 'Absolutely brilliant work on our healthcare application. They understood our complex requirements and implemented them flawlessly. Will definitely work with them again!',
        'avatar' => 'https://randomuser.me/api/portraits/women/65.jpg'
    ],
    [
        'name' => 'David Wilson',
        'company' => 'EduTech Solutions',
        'role' => 'Director of Technology',
        'rating' => 5,
        'comment' => 'The team rebuilt our entire learning management system with modern technologies. The performance improvements have been phenomenal, and our users love the new interface.',
        'avatar' => 'https://randomuser.me/api/portraits/men/75.jpg'
    ]
];

// Services offered
$services = [
    [
        'title' => 'Custom Web Development',
        'icon' => '💻',
        'description' => 'Tailored web solutions built with modern frameworks like React, Vue.js, and Laravel.'
    ],
    [
        'title' => 'Mobile App Development',
        'icon' => '📱',
        'description' => 'Cross-platform mobile applications using Flutter and React Native for maximum reach.'
    ],
    [
        'title' => 'E-Commerce Solutions',
        'icon' => '🛒',
        'description' => 'Complete online store setups with secure payment integrations and inventory management.'
    ],
    [
        'title' => 'UI/UX Design',
        'icon' => '🎨',
        'description' => 'Beautiful, intuitive interfaces designed to enhance user experience and engagement.'
    ]
];
?>
<?php include '../logic/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Services Blog & Testimonials</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <style>
        /* Custom animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .animate-fadeIn {
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        .animate-slideInLeft {
            animation: slideInLeft 0.6s ease-out forwards;
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        
        .blog-card {
            transition: all 0.3s ease;
            transform-style: preserve-3d;
        }
        
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .blog-card:hover .blog-image {
            transform: scale(1.03);
        }
        
        .blog-image {
            transition: transform 0.5s ease;
        }
        
        .category-badge {
            transition: all 0.2s ease;
        }
        
        .category-badge:hover {
            transform: translateY(-2px);
        }
        
        /* Gradient text for heading */
        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        /* Testimonial card styling */
        .testimonial-card {
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        /* Star rating styling */
        .star-rating {
            color: #fbbf24;
        }
        
        .star-empty {
            color: #d1d5db;
        }
        
        /* Service card styling */
        .service-card {
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px) scale(1.02);
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-12">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text animate-pulse">
                    Tech Insights & Client Stories
                </h1>
                <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">
                    Explore our latest articles on web & mobile development, and see what our clients say about our services.
                </p>
            </div>
        </div>
    </header>
    
    <!-- Services Offered Section -->
    <section class="bg-gradient-to-r from-blue-50 to-purple-50 py-12">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12 animate-slideInLeft">
                Our IT Services
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($services as $index => $service): ?>
                    <div 
                        class="service-card bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 animate-fadeIn"
                        style="animation-delay: <?= $index * 0.1 ?>s"
                    >
                        <div class="text-4xl mb-4"><?= $service['icon'] ?></div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2"><?= $service['title'] ?></h3>
                        <p class="text-gray-600"><?= $service['description'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- Main Content -->
    <main class="container mx-auto px-6 py-12">
        <!-- Blogs Section -->
        <section class="mb-16">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800">Latest Articles</h2>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">View All Articles →</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($blogs as $index => $blog): ?>
                    <div 
                        class="blog-card bg-white rounded-xl overflow-hidden shadow-md animate-fadeIn"
                        style="animation-delay: <?= $index * 0.1 ?>s"
                    >
                        <!-- Blog Image -->
                        <div class="h-48 overflow-hidden">
                            <img 
                                src="<?= $blog['image'] ?>" 
                                alt="<?= $blog['title'] ?>" 
                                class="w-full h-full object-cover blog-image"
                            >
                        </div>
                        
                        <!-- Blog Content -->
                        <div class="p-6">
                            <div class="flex justify-between items-center mb-3">
                                <span class="category-badge bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                    <?= $blog['category'] ?>
                                </span>
                                <span class="text-sm text-gray-500"><?= $blog['reading_time'] ?></span>
                            </div>
                            
                            <h2 class="text-xl font-bold text-gray-800 mb-2"><?= $blog['title'] ?></h2>
                            <p class="text-gray-600 mb-4"><?= $blog['excerpt'] ?></p>
                            
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-500"><?= $blog['date'] ?></span>
                                <a 
                                    href="<?= $blog['url'] ?>" 
                                    class="text-blue-600 hover:text-blue-800 font-medium text-sm"
                                >
                                    Read More →
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <!-- Testimonials Section -->
        <section>
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">What Our Clients Say</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach ($testimonials as $index => $testimonial): ?>
                    <div 
                        class="testimonial-card bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 animate-fadeIn"
                        style="animation-delay: <?= $index * 0.15 ?>s"
                    >
                        <div class="flex items-center mb-4">
                            <img 
                                src="<?= $testimonial['avatar'] ?>" 
                                alt="<?= $testimonial['name'] ?>" 
                                class="w-12 h-12 rounded-full object-cover mr-4"
                            >
                            <div>
                                <h3 class="font-semibold text-gray-800"><?= $testimonial['name'] ?></h3>
                                <p class="text-sm text-gray-600"><?= $testimonial['role'] ?>, <?= $testimonial['company'] ?></p>
                            </div>
                        </div>
                        
                        <!-- Star Rating -->
                        <div class="flex mb-4">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <?php if ($i <= $testimonial['rating']): ?>
                                    <svg class="w-5 h-5 star-rating" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                <?php else: ?>
                                    <svg class="w-5 h-5 star-empty" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                        
                        <p class="text-gray-700 italic">"<?= $testimonial['comment'] ?>"</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    
    <!-- Call to Action -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Start Your Project?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Let's discuss how we can help you build your next web or mobile application.</p>
            <a 
                href="#contact" 
                class="inline-block px-8 py-3 bg-white text-blue-600 font-bold rounded-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105"
            >
                Get in Touch
            </a>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">TechSolutions</h3>
                    <p class="text-gray-400">Delivering cutting-edge web and mobile solutions tailored to your business needs.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Web Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Mobile App Development</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">UI/UX Design</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">E-Commerce Solutions</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Our Team</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Connect</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© <?= date('Y') ?> TechSolutions. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript for additional animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add intersection observer for scroll animations
            const animatedElements = document.querySelectorAll('.animate-fadeIn, .animate-slideInLeft');
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        if (entry.target.classList.contains('animate-slideInLeft')) {
                            entry.target.style.transform = 'translateX(0)';
                        }
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            animatedElements.forEach(element => {
                observer.observe(element);
            });
            
            // Add hover effect to service cards
            const serviceCards = document.querySelectorAll('.service-card');
            serviceCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.classList.add('shadow-lg');
                });
                card.addEventListener('mouseleave', () => {
                    card.classList.remove('shadow-lg');
                });
            });
        });
    </script>
</body>
</html>