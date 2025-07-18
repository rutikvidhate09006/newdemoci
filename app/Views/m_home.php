
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home View</title>
 
 <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://unpkg.com/flowbite@2.2.1/dist/flowbite.min.js"></script>
    <script src="<?= base_url('public/header.js') ?>"></script>
  
  
</head>
<style>
  @keyframes scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

.logo-slider-track {
  animation: scroll 25s linear infinite;
}

</style>
<body>


<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/banner1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/banner2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/banner3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/banner4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/banner5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<section class="bg-white py-12">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
    
    <!-- Left Column: Heading -->
    <div>
      <h2 class="text-2xl md:text-2xl font-bold text-gray-900 leading-tight">
        We Are The Leader In<br>
        Industrial Gear Manufacturing<br>
        In Mumbai
      </h2>
    </div>
    
    <!-- Right Column: Experience & Paragraph -->
    <div>
      <p class="text-gray-600 mb-4 text-justify">
        You will find yourself working in a true partnership that results in an incredible experience,<br>
        and an end product that is the best.
      </p>
      <div class="flex items-center space-x-3">
        <span class="text-6xl font-bold text-black">
          10+
        </span>
        <span class="text-2xl font-semibold text-red-600">
          Years of Experience In<br> Industrial Gear Manufacturing
        </span>
      </div>
     
    </div>

  </div>
  <hr>
</section>

  <div class="max-w-7xl mx-auto px-4 py-8">
  <!-- Two-column layout for text and image -->
  <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
    
    <!-- Text section -->
    <div class="w-full md:w-1/2">
     <h1 class="text-2xl md:text-3xl font-bold text-[#ca2212]">
        Premium GearBox In Mumbai
</h1>
      <p class="mt-2 text-justify text-[#555]">
        Welcome to Asar Engineering Pvt. Ltd., where innovation meets precision in the realm of industrial engineering.
        Whether you are looking for a <strong>Gearbox in Mumbai</strong> or other intricate components, 
        we are your trusted partner for all your industrial needs. As a leading provider of high-quality
        mechanical components, we specialize in a wide range of products designed to meet the diverse
        needs of various industries. Our expertise spans across the manufacturing and export of gearboxes, 
        screws, couplings, and more. With a dedicated team of engineers and state-of-the-art manufacturing 
        facilities, we ensure that every product that leaves our premises meets the highest standards of quality and 
        reliability.
      </p>  

      <h2 class="text-2xl md:text-3xl mt-6 text-[#272727]">
        Get Premium Products Directly from Gearbox Manufacturers in Mumbai
      </h2>
      <p class="mt-2 text-justify text-[#555]">
        We provide innovative industrial solutions, offering a wide variety of gearboxes, screws, and couplings with exceptional quality.
      </p>
    </div>

    <!-- Image section -->
    <div class="w-full md:w-1/2">
      <img src="images/Home.jpeg" alt="Home Image" class="w-full h-auto rounded">
    </div>

  </div>

  <!-- Additional content below -->
  <div class="mt-8">
    <h2 class=" text-2xl md:text-3xl font-medium text-[#272727]">
      Looking for Industrial Screw Exporters in India?
    </h2>
    <p class="mt-2 text-justify text-[#555]">
      Our industrial screws are crafted from the finest materials, ensuring superior strength and precision. They are designed to withstand the toughest industrial environments, offering exceptional performance and longevity. In addition to gearboxes, Asar Engineering Pvt. Ltd. is also recognized as one of the premier <strong>Industrial Screw Exporters in India</strong>. Our global reach and commitment to customer satisfaction have earned us a reputation for excellence in the international market.
    </p>
    <button class="border-2 px-4 py-2 font-semibold mt-4" style="border-color: #ca2212; color: #ca2212; background-color: #ffffff;">
      Read More
    </button>
  </div>
</div>

<?php foreach ($visibleSections as $section): ?>
    <?php 
        $viewPath = APPPATH . 'Views/home/import/' . $section . '.php'; 
        if (file_exists($viewPath)) {
            echo view('home/import/' . $section);
        }
    ?>
<?php endforeach; ?>



           <!-- Video Gallery -->

<div class="max-w-7xl mx-auto px-4 py-12 text-center">
    <h2 class="text-2xl md:text-3xl font-bold text-[#ca2212]">Video Gallery</h2>
    <p class="text-lg text-gray-700 mb-10 max-w-6xl mx-auto mt-2">
     Step into our Video Gallery and witness innovation in motion. Watch as our precision-engineered gears, couplings, 
     sprockets, and extruders transform operations, boosting performance and efficiency. These videos offer a behind-the-scenes 
     look at how our solutions power industries, reduce downtime, and drive success,
      showcasing the cutting-edge technology that sets us apart.
    </p>

    <!-- Video Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      
      <!-- Video Card -->
      <div class="relative rounded-xl overflow-hidden shadow-md h-[300px] bg-black group">
        <!-- YouTube Logo Overlay -->
        <div class="absolute inset-0 flex items-center justify-center z-10 transition-opacity duration-300 group-hover:opacity-0">
        </div>
        <!-- YouTube Video -->
        <iframe class="w-full h-full absolute inset-0 z-0"
          src="https://www.youtube.com/embed/VIDEO_ID_1"
          title="Video 1"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
      </div>

      <!-- Copy this block for more videos -->
      <div class="relative rounded-xl overflow-hidden shadow-md h-[300px] bg-black group">
        <div class="absolute inset-0 flex items-center justify-center z-10 transition-opacity duration-300 group-hover:opacity-0">
        
        </div>
        <iframe class="w-full h-full absolute inset-0 z-0"
          src="https://www.youtube.com/embed/VIDEO_ID_2"
          title="Video 2"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
      </div>

      <div class="relative rounded-xl overflow-hidden shadow-md h-[300px] bg-black group">
        <div class="absolute inset-0 flex items-center justify-center z-10 transition-opacity duration-300 group-hover:opacity-0">
        </div>
        <iframe class="w-full h-full absolute inset-0 z-0"
          src="https://www.youtube.com/embed/VIDEO_ID_3"
          title="Video 3"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen>
        </iframe>
      </div>

    </div>
  </div>

  
<!-- Features Section -->


 <div class="max-w-7xl mx-auto px-4 py-12 text-center">
  <h2 class="text-2xl md:text-3xl font-bold text-[#ca2212]">Our Features</h2>
  <p class="text-lg text-gray-700 mb-10 max-w-3xl mx-auto text-center mt-2">
    Discover the key benefits and innovations that make our products stand out.
  </p>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    
    <!-- Feature Card -->
    <div class="group relative bg-white rounded-lg shadow-md p-6 overflow-hidden cursor-pointer transition-all duration-300">
      <!-- Swipe Background -->
      <div class="absolute inset-0 bg-black/60 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500 ease-in-out z-0"></div>

      <div class="relative z-10 flex flex-col items-center text-center transition-colors duration-300 group-hover:text-white">
     
        <div class=" text-white  flex items-center justify-center w-14 h-14 ">
         
          <img src="images/industrial.png" st>
        </div>
        
        <h3 class="text-xl font-semibold mb-2 mt-2">Precision Engineering</h3>
    
        <p class="text-base">
          Our products are crafted with the highest precision for maximum durability.
        </p>
      </div>
    </div>

    <!-- Copy the above block and change content for the next 3 cards -->
    
    <div class="group relative bg-white rounded-lg shadow-md p-6 overflow-hidden cursor-pointer transition-all duration-300">
      <div class="absolute inset-0 bg-black/60 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500 ease-in-out z-0"></div>
      <div class="relative z-10 flex flex-col items-center text-center transition-colors duration-300 group-hover:text-white">
       <div class=" text-white  flex items-center justify-center w-14 h-14 ">
         
          <img src="images/client-oriented.png" st>
        </div>
        <h3 class="text-xl font-semibold mb-2 mt-2">Fast Delivery</h3>
        <p class="text-base">
          We ensure fast shipping and turnaround times for every order.
        </p>
      </div>
    </div>

    <div class="group relative bg-white rounded-lg shadow-md p-6 overflow-hidden cursor-pointer transition-all duration-300">
      <div class="absolute inset-0 bg-black/60 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500 ease-in-out z-0"></div>
      <div class="relative z-10 flex flex-col items-center text-center transition-colors duration-300 group-hover:text-white">
       <div class=" text-white  flex items-center justify-center w-14 h-14 ">
         
          <img src="images/technology.png" st>
        </div>
        <h3 class="text-xl font-semibold mb-2 mt-2">Quality Assurance</h3>
        <p class="text-base">
          Every product is tested to meet industry-leading quality standards.
        </p>
      </div>
    </div>

    <div class="group relative bg-white rounded-lg shadow-md p-6 overflow-hidden cursor-pointer transition-all duration-300">
      <div class="absolute inset-0 bg-black/60 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-500 ease-in-out z-0"></div>
      <div class="relative z-10 flex flex-col items-center text-center transition-colors duration-300 group-hover:text-white">
       <div class=" text-white  flex items-center justify-center w-14 h-14 ">
         
          <img src="images/quality.png" st>
        </div>
        <h3 class="text-xl font-semibold mb-2 mt-2">Innovative Design</h3>
        <p class="text-base">
          We apply modern design thinking to every product we build.
        </p>
      </div>
    </div>

  </div>
</div>

<div class="w-full bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b');">
  <div class="bg-black/50 py-16">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
      
      <!-- Left: Heading + Description -->
      <div class="text-white">
        <h2 class=" text-2xl md:text-3xl font-bold mb-4" >What Our Clients Say About Us</h2>
        <p class="text-lg">
          We value our clients' feedback and strive to provide excellent service that leaves a lasting impression.
        </p>
      </div>

      <!-- Right: Review Slider Card -->
  <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-2xl mx-auto"> 
  <!-- Heading -->
  <h2 class="text-2xl font-bold text-red-600 mb-2">What Client's Say?</h2>
  <hr class="border-gray-300 mb-4">

  <!-- Slider Container -->
  <div id="default-carousel" class="relative w-full" data-carousel="slide">
    
    <!-- Carousel wrapper -->
    <div class="relative min-h-[200px] overflow-hidden rounded-lg">
      
      <!-- Slide 1: ACTIVE -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <p class="text-gray-800 text-base leading-relaxed mb-6">
          We’ve been using gear couplings from Asar Engineering Pvt. Ltd. for some time, and we couldn’t be more satisfied...
        </p>
        <div class="flex items-center gap-4 mt-4">
          <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" class="w-12 h-12 rounded-full" alt="user" />
          <span class="font-semibold text-red-600 text-lg">Aman Singh</span>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <p class="text-gray-800 text-base leading-relaxed mb-6">
          The couplings are incredibly durable, providing smooth operation and reliable performance...
        </p>
        <div class="flex items-center gap-4 mt-4">
          <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" class="w-12 h-12 rounded-full" alt="user" />
          <span class="font-semibold text-red-600 text-lg">Raman Singh</span>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <p class="text-gray-800 text-base leading-relaxed mb-6">
          They’ve reduced maintenance needs significantly and have enhanced our machinery's overall functionality...
        </p>
        <div class="flex items-center gap-4 mt-4">
          <img src="https://cdn-icons-png.flaticon.com/512/219/219986.png" class="w-12 h-12 rounded-full" alt="user" />
          <span class="font-semibold text-red-600 text-lg">Kakak Singh</span>
        </div>
      </div>

    </div>

  
     </div>
    </div>



    </div>
  </div>
</div>

<div class="max-w-7xl mx-auto px-4 py-12 text-center">

  <h2 class="text-2xl md:text-3xl font-bold text-[#ca2212]">Our Latest Blogs</h2>
  <p class="text-lg text-gray-700 mb-10 max-w-3xl mx-auto text-center mt-2">

    Discover the key benefits and innovations that make our products stand out.

  </p>
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

                    <!-- Blog Card 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 hover:shadow-2xl transition duration-300">
                      <div class="overflow-hidden">
                        <img src="https://source.unsplash.com/600x400/?technology" alt="Blog Image" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500" />
                      </div>
                      <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2" style="color:  #ca2212;">Innovations in Engineering</h3>
                        <p class="text-gray-600 text-sm mb-5 leading-relaxed">Discover cutting-edge tech reshaping the industrial world in 2025. Smart tools, AI, and automation trends explained.</p>
              <button class="border-2 px-4 py-2 font-semibold  mt-2" style="border-color: #ca2212; color: #ca2212; background-color: #ffffff;">
                Read More
              </button>        </div>
                    </div>

                    <!-- Blog Card 2 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 hover:shadow-2xl transition duration-300">
                      <div class="overflow-hidden">
                        <img src="https://source.unsplash.com/600x400/?industry" alt="Blog Image" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500" />
                      </div>
                      <div class="p-6">

                        <h3 class="text-xl font-bold text-gray-800 mb-2" style="color:  #ca2212;" >How Gear Couplings Work</h3>
                        <p class="text-gray-600 text-sm mb-5 leading-relaxed">Understand the mechanics and importance of gear couplings in heavy-duty machinery with real-world examples.</p>
              <button class="border-2 px-4 py-2 font-semibold  mt-2" style="border-color: #ca2212; color: #ca2212; background-color: #ffffff;">
                Read More
              </button>        </div>
                    </div>

                    <!-- Blog Card 3 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform hover:-translate-y-1 hover:shadow-2xl transition duration-300">
                                  <div class="overflow-hidden">
                                    <img src="https://source.unsplash.com/600x400/?maintenance" alt="Blog Image" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-500" />
                                  </div>
                                  <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-800 mb-2" style="color:  #ca2212;">Maintenance Best Practices</h3>
                                    <p class="text-gray-600 text-sm mb-5 leading-relaxed">Improve your machine longevity with these expert maintenance tips tailored for industrial environments.</p>
                          <button class="border-2 px-4 py-2 font-semibold  mt-2" style="border-color: #ca2212; color: #ca2212; background-color: #ffffff;">
                            Read More
                          </button>
                      </div>
                    </div>

   </div>


</div>

<div class="max-w-7xl mx-auto px-4 py-12 text-center">

        <h2 class="text-2xl md:text-3xl font-bold text-[#ca2212]">Our Clients</h2>
        <p class="text-lg text-gray-700 mb-10 max-w-3xl mx-auto text-center mt-2">

          Discover the key benefits and innovations that make our products stand out.

        </p>

        <!-- Carousel -->
          <div class="overflow-hidden relative">
               <div class="flex w-max gap-12 logo-slider-track">
              
                  <!-- Add your client logos here -->
                      <img src="images/coca-cola-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 1">
        <img src="images/Awrange-Logo-Orange-SVG.svg" class="h-16 object-contain" alt="Logo 2">
        <img src="images/ethereum-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 3">
        <img src="images/facebook-messenger-3-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 4">
        <img src="images/forbes-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 5">
        <img src="images/google-icon-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 6">
        
                      
                      <!-- Repeat logos for seamless loop -->
                     <img src="images/coca-cola-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 1">
        <img src="images/Awrange-Logo-Orange-SVG.svg" class="h-16 object-contain" alt="Logo 2">
        <img src="images/ethereum-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 3">
        <img src="images/facebook-messenger-3-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 4">
        <img src="images/forbes-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 5">
        <img src="images/google-icon-logo-svgrepo-com.svg" class="h-16 object-contain" alt="Logo 6">
        
                </div>
          </div>








</div>

</body>
</html>

