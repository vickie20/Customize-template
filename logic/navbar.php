<!-- Tailwind CSS CDN with animation plugins -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        animation: {
          'spin-slow': 'spin 3s linear infinite',
          'flower-spin': 'flowerSpin 1.5s ease-in-out infinite',
        },
        keyframes: {
          flowerSpin: {
            '0%': { transform: 'rotate(0deg) scale(1)' },
            '50%': { transform: 'rotate(180deg) scale(1.2)' },
            '100%': { transform: 'rotate(360deg) scale(1)' },
          }
        }
      }
    }
  }
</script>

<style>
  /* Custom transition for menu items */
  .menu-item {
    position: relative;
    transition: all 0.3s ease;
  }
  
  .menu-item::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #3b82f6, #6366f1);
    transition: width 0.3s ease;
  }
  
  .menu-item:hover::after {
    width: 100%;
  }
  
  /* Loading overlay styles */
  .loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s ease;
  }
  
  .loading-overlay.active {
    opacity: 1;
    pointer-events: all;
  }
  
  .flower-loader {
    width: 60px;
    height: 60px;
    position: relative;
    animation: flowerSpin 2s linear infinite;
  }
  
  .flower-petal {
    position: absolute;
    width: 20px;
    height: 20px;
    background: linear-gradient(135deg, #3b82f6, #6366f1);
    border-radius: 60% 40% 60% 40%;
    opacity: 0.8;
  }
  
  /* Position petals in a flower pattern */
  .petal-1 { top: 0; left: 20px; transform: rotate(0deg); }
  .petal-2 { top: 5px; right: 5px; transform: rotate(45deg); }
  .petal-3 { top: 20px; right: 0; transform: rotate(90deg); }
  .petal-4 { bottom: 5px; right: 5px; transform: rotate(135deg); }
  .petal-5 { bottom: 0; left: 20px; transform: rotate(180deg); }
  .petal-6 { bottom: 5px; left: 5px; transform: rotate(225deg); }
  .petal-7 { top: 20px; left: 0; transform: rotate(270deg); }
  .petal-8 { top: 5px; left: 5px; transform: rotate(315deg); }
</style>

<!-- Loading Overlay (initially hidden) -->
<div id="loadingOverlay" class="loading-overlay">
  <div class="flower-loader">
    <div class="flower-petal petal-1"></div>
    <div class="flower-petal petal-2"></div>
    <div class="flower-petal petal-3"></div>
    <div class="flower-petal petal-4"></div>
    <div class="flower-petal petal-5"></div>
    <div class="flower-petal petal-6"></div>
    <div class="flower-petal petal-7"></div>
    <div class="flower-petal petal-8"></div>
  </div>
</div>

<!-- Header Top Bar with fade-in animation -->
<div class="w-full bg-white border-b border-gray-200 text-sm text-gray-500 px-4 md:px-12 py-1 flex justify-between animate-fade-in">
  <div>
    <span class="text-blue-500 hover:text-blue-700 transition-colors duration-300">info@example.com</span> | +12354 879 254
  </div>
  <div>
    <a href="../pages/comming_soon.php" class="hover:text-blue-600 transition-colors duration-300">Login</a> |
    <a href="../pages/comming_soon.php" class="hover:text-blue-600 transition-colors duration-300 ml-1">Register</a>
  </div>
</div>

<!-- Main Navigation -->
<div class="w-full bg-white shadow-sm px-4 md:px-12 py-3 sticky top-0 z-50">
  <div class="flex justify-between items-center">
    
    <!-- Logo with hover animation -->
    <div class="flex items-center space-x-2 text-2xl font-bold text-blue-700 group">
      <img src="/EstVic Studios/assetts/personal_logo.png" alt="logo" class="w-8 h-8 transition-transform duration-300 group-hover:rotate-12"> 
      <span class="transition-colors duration-300 group-hover:text-indigo-800">Optitech</span>
    </div>
    
    <!-- Nav Links with enhanced hover effects -->
    <nav class="hidden md:flex space-x-8 text-sm font-medium">
      <a href="/EstVic Studios/index.php" class="menu-item text-gray-700 hover:text-blue-600 transition-all duration-300" onclick="navigateWithLoader(event, '/EstVic Studios/index.php')">Home</a>
      
      <div class="relative group">
        <a href="#" class="menu-item text-gray-700 hover:text-blue-600 transition-all duration-300">Pages</a>
        <div class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform -translate-y-1 group-hover:translate-y-0">
          <a href="/EstVic Studios/pages/about-us.php" class="block px-4 py-2 hover:bg-blue-50 transition-colors duration-200 rounded-t-md" onclick="navigateWithLoader(event, '/EstVic Studios/pages/about-us.php')">About Us</a>
          <a href="/EstVic Studios/pages/teams.php" class="block px-4 py-2 hover:bg-blue-50 transition-colors duration-200" onclick="navigateWithLoader(event, '/EstVic Studios/pages/teams.php')">Our Team</a>
          <a href="/EstVic Studios/pages/testimonials.php" class="block px-4 py-2 hover:bg-blue-50 transition-colors duration-200 rounded-b-md" onclick="navigateWithLoader(event, '/EstVic Studios/pages/testimonials.php')">Testimonials</a>
        </div>
      </div>
      
      <a href="/EstVic Studios/pages/products.php" class="menu-item text-gray-700 hover:text-blue-600 transition-all duration-300" onclick="navigateWithLoader(event, '/EstVic Studios/pages/products.php')">Services</a>
      <a href="/EstVic Studios/pages/projects.php" class="menu-item text-gray-700 hover:text-blue-600 transition-all duration-300" onclick="navigateWithLoader(event, '/EstVic Studios/pages/projects.php')">Project</a>
      <a href="/EstVic Studios/pages/blog.php" class="menu-item text-gray-700 hover:text-blue-600 transition-all duration-300" onclick="navigateWithLoader(event, '/EstVic Studios/pages/blog.php')">Blog</a>
      <a href="/EstVic Studios/pages/contact.php" class="menu-item text-gray-700 hover:text-blue-600 transition-all duration-300" onclick="navigateWithLoader(event, '/EstVic Studios/pages/contact.php')">Contact</a>
    </nav>
    
    <!-- Get a Quote Button with pulse animation -->
    <a href="/EstVic Studios/pages/quote.html" class="hidden md:inline-block bg-gradient-to-r from-blue-600 to-indigo-800 text-white text-sm px-6 py-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105 hover:from-blue-700 hover:to-indigo-900 animate-pulse" onclick="navigateWithLoader(event, '/EstVic Studios/pages/quote.html')">
      Get a quote
    </a>
    
    <!-- Mobile Menu Icon with rotation animation -->
    <button class="md:hidden text-blue-700 hover:rotate-90 transition-transform duration-300" onclick="toggleMobileMenu()">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  </div>
  
  <!-- Mobile Menu (hidden by default) -->
  <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
    <a href="/EstVic Studios/index.php" class="block py-2 text-gray-700 hover:text-blue-600" onclick="navigateWithLoader(event, '/EstVic Studios/index.php')">Home</a>
    <a href="/EstVic Studios/pages/products.php" class="block py-2 text-gray-700 hover:text-blue-600" onclick="navigateWithLoader(event, '/EstVic Studios/pages/products.php')">Services</a>
    <a href="/EstVic Studios/pages/projects.php" class="block py-2 text-gray-700 hover:text-blue-600" onclick="navigateWithLoader(event, '/EstVic Studios/pages/projects.php')">Project</a>
    <a href="/EstVic Studios/pages/blog.php" class="block py-2 text-gray-700 hover:text-blue-600" onclick="navigateWithLoader(event, '/EstVic Studios/pages/blog.php')">Blog</a>
    <a href="/EstVic Studios/pages/contact.php" class="block py-2 text-gray-700 hover:text-blue-600" onclick="navigateWithLoader(event, '/EstVic Studios/pages/contact.php')">Contact</a>
    <a href="/EstVic Studios/pages/quote.html" class="block mt-2 bg-gradient-to-r from-blue-600 to-indigo-800 text-white text-sm px-6 py-2 rounded-full shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-105" onclick="navigateWithLoader(event, '/EstVic Studios/pages/quote.html')">
      Get a quote
    </a>
  </div>
</div>

<script>
  // Function to navigate with loader animation
  function navigateWithLoader(event, url) {
    event.preventDefault();
    const overlay = document.getElementById('loadingOverlay');
    overlay.classList.add('active');
    
    // Redirect after showing the loader for 1.5 seconds
    setTimeout(() => {
      window.location.href = url;
    }, 1500);
  }
  
  // Function to toggle mobile menu
  function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
  }
  
  // Add fade-in animation to the header when page loads
  document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.animate-fade-in');
    header.style.opacity = '0';
    header.style.transition = 'opacity 0.8s ease';
    
    setTimeout(() => {
      header.style.opacity = '1';
    }, 100);
  });
</script>