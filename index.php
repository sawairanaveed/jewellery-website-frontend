<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Discover elegant and timeless jewelry pieces at Gleam Jewels.">
  <title>Essmi Jewelry</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
  <title>Gleam Jewels | Jewelry Store</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body class="bg-black text-white font-sans">
  <!-- Header Section -->
  <header class="bg-black shadow-md sticky top-0 z-50 header-hover">
    <div class="container mx-auto flex items-center justify-between p-4 fade-in">
      <div class="flex items-center">
        <img src="./images/logo.png" alt="Gleam Jewels Logo" class="h-12 w-auto object-contain">
      </div>
      <nav class="hidden md:flex space-x-6 text-gray-300">
        <a href="#home" class="nav-link hover:text-white">Home</a>
        <a href="#collection" class="nav-link hover:text-white">Collection</a>
        <a href="./shop.php" class="nav-link hover:text-white">Shop</a>
        <a href="#about" class="nav-link hover:text-white">About Us</a>
        <a href="#contact" class="nav-link hover:text-white">Contact</a>
      </nav>
      <a href="#cart" class="text-gray-300 hover:text-white">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l3-8H5.4m14.6 0l1 5a2 2 0 01-2 2H7a2 2 0 01-2-2M7 13l-1 5a2 2 0 002 2h12a2 2 0 002-2l1-5M10 21a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
      </a>
    </div>
  </header>
   <!-- divider -->
   <div class="divider"></div>
  <!-- Hero Section -->
  <section id="home" class="bg-gradient-to-r from-black via-brown-900 to-brown-800 min-h-screen flex items-center justify-center text-center relative">
    <div class="absolute inset-0">
      <!-- Video Background -->
      <video autoplay loop muted class="w-full h-full object-cover">
        <source src="./video/Jewel-video-output.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="relative z-10 text-white fade-in">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Timeless Elegance</h1>
      <p class="text-lg md:text-xl mb-6">Discover stunning jewelry that defines luxury and grace.</p>
      <a href="#collection" class="btn-brown hover-bg-brown">Explore Collection</a>
    </div>
  </section>
   <!-- divider -->
   <div class="divider"></div>
    <!-- Featured Collection Section -->
    <section id="collection" class="py-16 bg-black">
      <div class="container mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white">Our Featured Collection</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-black rounded-lg shadow-lg overflow-hidden slide-in hover-scale">
            <img src="./images/ring/diamond1.webp" alt="Diamond Ring" class="w-full py-3 h-64 object-contain transition-transform transform hover-image">
            <div class="p-4">
              <h3 class="text-xl font-bold text-white">Diamond Ring</h3>
              <p class="text-gray-300 mt-2">A perfect blend of elegance and sophistication.</p>
            </div>
          </div>
          <div class="bg-black rounded-lg shadow-lg overflow-hidden slide-in hover-scale">
            <img src="./images/Necklace/necklace7.webp" alt="Gold Necklace" class="w-full py-3 h-64 object-contain transition-transform transform hover-image">
            <div class="p-4">
              <h3 class="text-xl font-bold text-white">Gold Necklace</h3>
              <p class="text-gray-300 mt-2">Make a statement with our exquisite designs.</p>
            </div>
          </div>
          <div class="bg-black rounded-lg shadow-lg overflow-hidden slide-in hover-scale">
            <img src="./images/bracelet/bracelete3.webp" alt="Elegant Bracelet" class="w-full py-3 h-64 object-contain transition-transform transform hover-image">
            <div class="p-4">
              <h3 class="text-xl font-bold text-white">Elegant Bracelet</h3>
              <p class="text-gray-300 mt-2">Crafted to perfection for every occasion.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- divider -->
  <div class="divider"></div>
    <!-- Customer Testimonials Section -->
   <section id="testimonials" class="py-16 bg-black">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white">What Our Customers Say</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="testimonial-card">
          <p class="text-lg text-gray-300 mb-4">"The elegance of the jewelry is unmatched. I feel so special wearing these pieces!"</p>
          <p class="font-bold text-white">Sarah M.</p>
        </div>
        <div class="testimonial-card">
          <p class="text-lg text-gray-300 mb-4">"Gleam Jewels made our anniversary unforgettable with a custom necklace. Highly recommend!"</p>
          <p class="font-bold text-white">John D.</p>
        </div>
        <div class="testimonial-card">
          <p class="text-lg text-gray-300 mb-4">"I get compliments every time I wear my bracelet from Gleam Jewels. Amazing quality!"</p>
          <p class="font-bold text-white">Emily R.</p>
        </div>
      </div>
    </div>
  </section>
   <!-- divider -->
   <div class="divider"></div>
  <!-- Craftsmanship & Legacy Section -->
<section id="craftsmanship" class="bg-gradient-to-br from-black via-gray-900 to-black py-16 relative overflow-hidden">
  <div class="container mx-auto text-center md:text-left">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-brown-600 mb-4 fade-in">Craftsmanship & Legacy</h2>
      <p class="text-lg text-gray-300 leading-relaxed">
        At Gleam Jewels, every piece is a story of passion, heritage, and meticulous attention to detail. We honor the timeless art of jewelry-making, blending modern designs with age-old techniques to craft masterpieces that last forever.
      </p>
    </div>
    <!-- Features Section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 fade-in">
      <!-- Feature 1 -->
      <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 relative">
        <img src="./images/jewelry craftsmanship.webp" alt="Masterful Artisans" class="w-full h-64 object-cover opacity-80 group-hover:opacity-100 transition duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-0 group-hover:opacity-100 transition duration-500"></div>
        <div class="p-6 relative z-10">
          <h3 class="text-2xl text-white font-bold mb-2">Masterful Artisans</h3>
          <p class="text-gray-300">Crafted by skilled hands, each jewel reflects centuries of expertise and devotion.</p>
        </div>
      </div>
      <!-- Feature 2 -->
      <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 relative">
        <img src="./images/luxury jewelry materials.webp" alt="Timeless Design" class="w-full h-64 object-cover opacity-80 group-hover:opacity-100 transition duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-0 group-hover:opacity-100 transition duration-500"></div>
        <div class="p-6 relative z-10">
          <h3 class="text-2xl text-white font-bold mb-2">Timeless Design</h3>
          <p class="text-gray-300">Our designs are more than just jewelry – they are timeless expressions of elegance.</p>
        </div>
      </div>
      <!-- Feature 3 -->
      <div class="group bg-gray-800 rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 relative">
        <img src="./images/classic jewelry pieces.webp" alt="Premium Materials" class="w-full h-64 object-cover opacity-80 group-hover:opacity-100 transition duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-0 group-hover:opacity-100 transition duration-500"></div>
        <div class="p-6 relative z-10">
          <h3 class="text-2xl text-white font-bold mb-2">Premium Materials</h3>
          <p class="text-gray-300">We source only the finest gemstones and metals to create our extraordinary pieces.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Decorative Element -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="w-72 h-72 bg-brown-600 opacity-10 blur-3xl rounded-full absolute top-1/3 left-1/4"></div>
    <div class="w-96 h-96 bg-brown-700 opacity-10 blur-3xl rounded-full absolute bottom-1/4 right-1/3"></div>
  </div>
</section>
 <!-- divider -->
 <div class="divider"></div>
<!-- Services Section -->
  <section id="services" class="py-16 bg-black">
    <div class="container mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white">Our Services</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-black text-white p-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold mb-4">Custom Jewelry Designs</h3>
          <p class="text-gray-300">Work with our designers to create a piece as unique as you are.</p>
        </div>
        <div class="bg-black text-white p-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold mb-4">Jewelry Engraving</h3>
          <p class="text-gray-300">Personalize your jewelry with custom engraving for a special touch.</p>
        </div>
        <div class="bg-black text-white p-8 rounded-lg shadow-lg">
          <h3 class="text-2xl font-bold mb-4">Repair & Restoration</h3>
          <p class="text-gray-300">We provide expert repair and restoration services for your jewelry.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Newsletter Subscription Section
  <section id="newsletter" class="bg-black py-16 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white">Subscribe to Our Newsletter</h2>
    <p class="text-lg mb-4 text-gray-300">Get updates on new collections, exclusive offers, and more!</p>
    <form class="max-w-md mx-auto">
      <input type="email" placeholder="Enter your email" class="input-field w-full mb-4" required>
      <button type="submit" class="btn-brown w-full">Subscribe</button>
    </form>
  </section> --> 
   <!-- divider -->
   <div class="divider"></div>
  <!-- Contact Form Section -->
  <section id="contact" class="py-16 bg-black text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white">Contact Us</h2>
    <form class="max-w-md mx-auto">
      <input type="text" placeholder="Your Name" class="input-field w-full mb-4" required>
      <input type="email" placeholder="Your Email" class="input-field w-full mb-4" required>
      <textarea placeholder="Your Message" class="input-field w-full mb-4" rows="4" required></textarea>
      <button type="submit" class="btn-brown w-full">Send Message</button>
    </form>
  </section>
  <!-- divider -->
  <div class="divider"></div>
  <!-- footer section -->
  <?php include 'footer.php'; ?>
</body>
</html>
