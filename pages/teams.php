<?php
// Team Members Data
$team_members = [
    [
        'name' => 'Victor Karanja',
        'role' => 'Co-Founder & Full-Stack Developer',
        'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
        'skills' => ['PHP', 'JavaScript', 'Node.js', 'React', 'Laravel', 'MySQL'],
        'quote' => '"At EstVic Studios, we don’t just build websites—we craft digital experiences that drive success."',
        'social' => [
            'linkedin' => '#',
            'twitter' => '#',
            'github' => '#',
        ]
    ],
    [
        'name' => 'Esther Ng’ang’a',
        'role' => 'Co-Founder & Frontend Developer',
        'image' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80',
        'skills' => ['HTML/CSS', 'JavaScript', 'React', 'Vue.js', 'UI/UX Design', 'Tailwind CSS'],
        'quote' => '"Our mission is to blend creativity with functionality, delivering designs that users love."',
        'social' => [
            'linkedin' => '#',
            'twitter' => '#',
            'dribbble' => '#',
        ]
    ]
];
?>
<?php include '../logic/navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team | EstVic Studios</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .animate-fadeIn {
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        
        .animate-pulse {
            animation: pulse 2s infinite;
        }
        
        /* Team Card Hover Effect */
        .team-card {
            transition: all 0.3s ease;
            transform-style: preserve-3d;
        }
        
        .team-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        /* Skill Badge Styling */
        .skill-badge {
            transition: all 0.2s ease;
        }
        
        .skill-badge:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header Section -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-12 text-center">
            <h1 class="text-4xl md:text-5xl font-bold gradient-text animate-pulse">
                Meet Our Team
            </h1>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                The brilliant minds behind EstVic Studios—passionate about technology, design, and innovation.
            </p>
        </div>
    </header>
    
    <!-- Team Section -->
    <main class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 max-w-4xl mx-auto">
            <?php foreach ($team_members as $index => $member): ?>
                <div 
                    class="team-card bg-white rounded-xl overflow-hidden shadow-lg animate-fadeIn"
                    style="animation-delay: <?= $index * 0.2 ?>s"
                >
                    <!-- Team Member Image -->
                    <div class="h-64 overflow-hidden">
                        <img 
                            src="<?= $member['image'] ?>" 
                            alt="<?= $member['name'] ?>" 
                            class="w-full h-full object-cover"
                        >
                    </div>
                    
                    <!-- Team Member Details -->
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800"><?= $member['name'] ?></h2>
                        <p class="text-blue-600 font-medium mb-4"><?= $member['role'] ?></p>
                        
                        <!-- Skills -->
                        <div class="mb-4">
                            <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Skills</h3>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($member['skills'] as $skill): ?>
                                    <span class="skill-badge bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                        <?= $skill ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Quote -->
                        <div class="mb-6">
                            <div class="relative">
                                <svg 
                                    class="absolute -left-2 -top-2 w-6 h-6 text-gray-300" 
                                    fill="currentColor" 
                                    viewBox="0 0 24 24"
                                >
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                                <p class="text-gray-700 italic pl-6">
                                    <?= $member['quote'] ?>
                                </p>
                            </div>
                        </div>
                        
                        <!-- Social Links -->
                        <div class="flex space-x-4">
                            <?php if (isset($member['social']['linkedin'])): ?>
                                <a 
                                    href="<?= $member['social']['linkedin'] ?>" 
                                    class="text-blue-600 hover:text-blue-800"
                                    target="_blank"
                                >
                                    <i class="fab fa-linkedin-in text-lg"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (isset($member['social']['twitter'])): ?>
                                <a 
                                    href="<?= $member['social']['twitter'] ?>" 
                                    class="text-blue-400 hover:text-blue-600"
                                    target="_blank"
                                >
                                    <i class="fab fa-twitter text-lg"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (isset($member['social']['github'])): ?>
                                <a 
                                    href="<?= $member['social']['github'] ?>" 
                                    class="text-gray-800 hover:text-black"
                                    target="_blank"
                                >
                                    <i class="fab fa-github text-lg"></i>
                                </a>
                            <?php endif; ?>
                            
                            <?php if (isset($member['social']['dribbble'])): ?>
                                <a 
                                    href="<?= $member['social']['dribbble'] ?>" 
                                    class="text-pink-500 hover:text-pink-700"
                                    target="_blank"
                                >
                                    <i class="fab fa-dribbble text-lg"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Company Mission Section -->
        <div class="mt-16 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-xl p-8 text-center animate-fadeIn">
            <h2 class="text-2xl font-bold mb-4">Our Mission at EstVic Studios</h2>
            <p class="text-xl max-w-3xl mx-auto">
                "To deliver cutting-edge digital solutions that empower businesses and create seamless user experiences."
            </p>
        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <p>© <?= date('Y') ?> EstVic Studios. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- JavaScript for Animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add intersection observer for scroll animations
            const animatedElements = document.querySelectorAll('.animate-fadeIn');
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            animatedElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>