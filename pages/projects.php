<?php
// projects-data.php - Sample data for projects

$projects = [
    [
        'id' => 1,
        'title' => 'E-Commerce Platform',
        'image' => 'https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'languages' => ['PHP', 'JavaScript', 'HTML5', 'CSS3'],
        'tools' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
        'url' => 'projects/ecommerce'
    ],
    [
        'id' => 2,
        'title' => 'Real Estate Management Systen',
        'image' => 'https://cdn.psdrepo.com/images/2x/ait-real-estate-web-design-development-y2.jpg',
        'languages' => ['Wordpress'],
        'tools' => ['Wordpress'],
        'url' => 'projects/fitness-app'
    ],
    [
        'id' => 2,
        'title' => 'Mobile Fitness App',
        'image' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'languages' => ['Dart', 'JavaScript'],
        'tools' => ['Flutter', 'Firebase', 'Node.js'],
        'url' => 'projects/fitness-app'
    ],
    [
        'id' => 3,
        'title' => 'Data Visualization Dashboard',
        'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'languages' => ['Python', 'JavaScript'],
        'tools' => ['Django', 'React', 'Chart.js', 'PostgreSQL'],
        'url' => 'projects/dashboard'
    ],
    [
        'id' => 4,
        'title' => 'Portfolio Website',
        'image' => 'https://images.unsplash.com/photo-1547658719-da2b51169166?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'languages' => ['JavaScript', 'HTML5', 'CSS3'],
        'tools' => ['React', 'GSAP', 'Tailwind CSS'],
        'url' => 'projects/portfolio'
    ],
    [
        'id' => 5,
        'title' => 'Social Media Analytics',
        'image' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'languages' => ['Python', 'JavaScript'],
        'tools' => ['Flask', 'D3.js', 'MongoDB'],
        'url' => 'projects/social-analytics'
    ],
    [
        'id' => 6,
        'title' => 'Inventory Management System',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',
        'languages' => ['Java', 'JavaScript'],
        'tools' => ['Spring Boot', 'React', 'MySQL'],
        'url' => 'projects/inventory'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../logic/navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects Showcase</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <style>
        /* Custom animations */
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
        
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        .project-card {
            transition: all 0.3s ease;
            transform-style: preserve-3d;
            perspective: 1000px;
        }
        
        .project-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .project-card:hover .project-image {
            transform: scale(1.05);
        }
        
        .project-image {
            transition: transform 0.5s ease;
        }
        
        .badge {
            transition: all 0.2s ease;
        }
        
        .badge:hover {
            transform: scale(1.1);
        }
        
        /* Gradient text for heading */
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
        <div class="container mx-auto px-6 py-8">
            <h1 class="text-4xl md:text-5xl font-bold text-center gradient-text animate-float">
                My Projects
            </h1>
            <p class="text-center text-gray-600 mt-4 max-w-2xl mx-auto">
                Here are some of the projects I've worked on. Click "View More" to see details about each project.
            </p>
        </div>
    </header>
    
    <!-- Projects Grid -->
    <main class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($projects as $index => $project): ?>
                <div 
                    class="project-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 animate-fadeInUp"
                    style="animation-delay: <?= $index * 0.1 ?>s"
                >
                    <!-- Project Image -->
                    <div class="h-48 overflow-hidden">
                        <img 
                            src="<?= $project['image'] ?>" 
                            alt="<?= $project['title'] ?>" 
                            class="w-full h-full object-cover project-image"
                        >
                    </div>
                    
                    <!-- Project Content -->
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2"><?= $project['title'] ?></h2>
                        
                        <!-- Languages -->
                        <div class="mb-4">
                            <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Languages</h3>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($project['languages'] as $lang): ?>
                                    <span class="badge bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                        <?= $lang ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Tools -->
                        <div class="mb-6">
                            <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Tools & Frameworks</h3>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($project['tools'] as $tool): ?>
                                    <span class="badge bg-purple-100 text-purple-800 text-xs font-medium px-2.5 py-0.5 rounded">
                                        <?= $tool ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- View More Button -->
                        <a 
                            href="<?= $project['url'] ?>" 
                            class="inline-block w-full text-center px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-medium rounded-lg hover:from-blue-600 hover:to-purple-700 transition-all duration-300 transform hover:scale-105"
                        >
                            View More
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 py-8 mt-12">
        <div class="container mx-auto px-6 text-center text-gray-500">
            <p>© <?= date('Y') ?> My Portfolio. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- JavaScript for additional animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add intersection observer for scroll animations
            const projectCards = document.querySelectorAll('.project-card');
            
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
            
            projectCards.forEach(card => {
                observer.observe(card);
            });
            
            // Add hover effect to badges
            const badges = document.querySelectorAll('.badge');
            badges.forEach(badge => {
                badge.addEventListener('mouseenter', () => {
                    badge.classList.add('shadow-md');
                });
                badge.addEventListener('mouseleave', () => {
                    badge.classList.remove('shadow-md');
                });
            });
        });
    </script>
</body>
</html>