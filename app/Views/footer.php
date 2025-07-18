
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home View</title>
 
 <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
</head>
<body>
  <footer class="bg-black text-white pt-10">
    <div class="max-w-7xl mx-auto px-4 xl:px-0">
      <!-- Grid Layout for 4 Sections -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- Section 1: Logo and About -->
        <div>
           <img src="<?=base_url('images/Awrange-Logo-Orange-SVG.svg')?>"  >
          <p class="mt-4 text-white/80 text-sm">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, fugit non. Incidunt dolorum adipisci, tempore asperiores nemo.
          </p>
         
        </div>

        <!-- Section 2: Pages Main_home -->
        <div>
          <h2 class="text-lg font-semibold mb-3">Useful Links </h2>
          <ul class="space-y-2 text-sm text-white/90">
            <li><a href="<?= base_url('Main_home') ?>" class="hover:text-white">Home</a></li>
            <li><a href="<?= base_url('about_us') ?>" class="hover:text-white">About US </a></li>
            <li><a href="<?= base_url('clients') ?>" class="hover:text-white">Clients </a></li>
            <li><a href="/plans-and-pricing" class="hover:text-white">Video Gallery </a></li>
            <li><a href="/terms-and-conditions" class="hover:text-white">Photo Gallery</a></li>
            <li><a href="/privacy-policy" class="hover:text-white">Blogs </a></li>
            <li><a href="<?= base_url('contact_us') ?>" class="hover:text-white">Contact Us </a></li>
            <li><a href="<?= base_url('sitemap.xml') ?>" class="hover:text-white">Site Map </a></li>


          </ul>
        </div>

        <!-- Section 3: Products -->
        <div>
          <h2 class="text-lg font-semibold mb-3">Our Products</h2>
          <ul class="space-y-2 text-sm text-white/90">
            <li><a href="#" class="hover:text-white">Industrial Transmission Gear</a></li>
            <li><a href="#" class="hover:text-white">Industrial Chain Sprocket</a></li>
            <li><a href="#" class="hover:text-white">Industrial Screw</a></li>
            <li><a href="#" class="hover:text-white">Industrial Coupling</a></li>
            <li><a href="#" class="hover:text-white">Idler Roller</a></li>
            <li><a href="#" class="hover:text-white">Mechanical Seal</a></li>
            <li><a href="#" class="hover:text-white">Industrial Transmission Chain</a></li>
            <li><a href="#" class="hover:text-white">Industrial Gearbox</a></li>
          </ul>
        </div>

        <!-- Section 4: Contact Info -->
        <div>
          <h2 class="text-lg font-semibold mb-3">Contact Us</h2>
          <div class="space-y-4 text-sm text-white/90">
            <div>
              <p class="font-semibold">Address</p>
              <p>Sub Nerul, Mumbai, India, 123456</p>
            </div>
            <div>
              <p class="font-semibold">Support Number</p>
              <a href="tel:+911800123444">+91 1800123444</a>
            </div>
            
          </div>
        </div>

      </div>

      <!-- Footer Bottom -->
      <hr class="my-6 border-white/30">
     <div class="flex flex-col md:flex-row justify-between items-center text-white/70 text-xs md:text-sm pb-6 gap-4">
  <!-- Left: Copyright -->
  <div class="text-center md:text-left">
    © 2024 YOUR WEBSITES PVT. LTD. All Rights Reserved
  </div>

  <!-- Center: Social Icons -->
  <div class="flex space-x-4">
    <a href="#"><img src="https://www.englishyaari.com/img/facebook.svg" alt="Facebook" width="20"></a>
    <a href="#"><img src="https://www.englishyaari.com/img/linkdin.svg" alt="LinkedIn" width="20"></a>
    <a href="#"><img src="https://www.englishyaari.com/img/instagram1.svg" alt="Instagram" width="20"></a>
    <a href="#"><img src="https://www.englishyaari.com/img/twitter.svg" alt="Twitter" width="20"></a>
    <a href="#"><img src="https://www.englishyaari.com/img/youtube.svg" alt="YouTube" width="20"></a>
  </div>

  <!-- Right: Market Area -->
 <div class="md:w-1/3 mb-2 md:mb-0 text-center md:text-center">
  <p class="mb-0 text-White-700">
    Market Area is present in 
    <a href="<?= base_url('Cities') ?>" class="inline-block bg-red-600 text-white px-3 py-1 rounded-full text-sm hover:bg-red-700 transition">
      175 Cities
    </a>
  </p>
</div>
</div>

    </div>
  </footer>  
</body>
</html>