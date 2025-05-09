<?php
// Social Media Links
$social_media = [
    [
        'name' => 'LinkedIn',
        'icon' => 'linkedin',
        'url' => 'https://linkedin.com/yourprofile',
        'color' => 'bg-blue-600 hover:bg-blue-700'
    ],
    [
        'name' => 'Twitter',
        'icon' => 'twitter',
        'url' => 'https://twitter.com/yourprofile',
        'color' => 'bg-blue-400 hover:bg-blue-500'
    ],
    [
        'name' => 'Instagram',
        'icon' => 'instagram',
        'url' => 'https://instagram.com/yourprofile',
        'color' => 'bg-pink-500 hover:bg-pink-600'
    ],
    [
        'name' => 'TikTok',
        'icon' => 'tiktok',
        'url' => 'https://tiktok.com/yourprofile',
        'color' => 'bg-black hover:bg-gray-800'
    ]
];

// Contact Methods
$contact_methods = [
    [
        'name' => 'Email Us',
        'icon' => '✉️',
        'info' => 'contact@yourcompany.com',
        'url' => 'mailto:contact@yourcompany.com',
        'color' => 'bg-red-100 text-red-800'
    ],
    [
        'name' => 'Call Us',
        'icon' => '📞',
        'info' => '+1 (123) 456-7890',
        'url' => 'tel:+11234567890',
        'color' => 'bg-green-100 text-green-800'
    ],
    [
        'name' => 'WhatsApp',
        'icon' => '💬',
        'info' => 'Chat on WhatsApp',
        'url' => 'https://wa.me/1234567890',
        'color' => 'bg-green-100 text-green-800'
    ],
    [
        'name' => 'LinkedIn',
        'icon' => '🔗',
        'info' => 'Connect on LinkedIn',
        'url' => 'https://linkedin.com/yourprofile',
        'color' => 'bg-blue-100 text-blue-800'
    ]
];
?>
<?php include '../logic/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Your IT Services</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Contact Card Hover Effect */
        .contact-card {
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        /* Social Media Icon Hover Effect */
        .social-icon {
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            transform: scale(1.1) translateY(-5px);
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-12 text-center">
            <h1 class="text-4xl md:text-5xl font-bold gradient-text animate-pulse">
                Get In Touch
            </h1>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Reach out to us via email, phone, WhatsApp, or LinkedIn. We'd love to hear from you!
            </p>
        </div>
    </header>
    
    <!-- Main Contact Section -->
    <main class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Methods -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Contact Us Directly</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <?php foreach ($contact_methods as $index => $contact): ?>
                        <a 
                            href="<?= $contact['url'] ?>" 
                            class="contact-card bg-white p-6 rounded-lg shadow-md flex items-center animate-fadeInUp"
                            style="animation-delay: <?= $index * 0.1 ?>s"
                        >
                            <div class="text-3xl mr-4"><?= $contact['icon'] ?></div>
                            <div>
                                <h3 class="font-semibold text-gray-800"><?= $contact['name'] ?></h3>
                                <p class="text-gray-600"><?= $contact['info'] ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Send Us a Message</h2>
                
                <form class="bg-white p-6 rounded-lg shadow-md animate-fadeInUp" style="animation-delay: 0.2s">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 mb-2">Your Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="John Doe"
                            required
                        >
                    </div>
                    
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="john@example.com"
                            required
                        >
                    </div>
                    
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 mb-2">Subject</label>
                        <input 
                            type="text" 
                            id="subject" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="How can we help?"
                            required
                        >
                    </div>
                    
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 mb-2">Your Message</label>
                        <textarea 
                            id="message" 
                            rows="4" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Tell us about your project..."
                            required
                        ></textarea>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-105"
                    >
                        Send Message
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Social Media Section -->
        <div class="mt-16 text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Connect With Us</h2>
            <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                Follow us on social media for the latest updates, tech tips, and more!
            </p>
            
            <div class="flex justify-center space-x-6">
                <?php foreach ($social_media as $index => $social): ?>
                    <a 
                        href="<?= $social['url'] ?>" 
                        target="_blank" 
                        class="social-icon <?= $social['color'] ?> text-white w-12 h-12 rounded-full flex items-center justify-center text-xl animate-fadeInUp"
                        style="animation-delay: <?= $index * 0.1 ?>s"
                        title="<?= $social['name'] ?>"
                    >
                        <i class="fab fa-<?= $social['icon'] ?>"></i>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <p>© <?= date('Y') ?> Your IT Services. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- JavaScript for Animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add intersection observer for scroll animations
            const animatedElements = document.querySelectorAll('.animate-fadeInUp');
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            animatedElements.forEach(element => {
                observer.observe(element);
            });
            
            // Add hover effect to social icons
            const socialIcons = document.querySelectorAll('.social-icon');
            socialIcons.forEach(icon => {
                icon.addEventListener('mouseenter', () => {
                    icon.classList.add('shadow-lg');
                });
                icon.addEventListener('mouseleave', () => {
                    icon.classList.remove('shadow-lg');
                });
            });
        });
    </script>
</body>
</html>