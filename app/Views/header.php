<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= esc($title ?? 'Default Site Title') ?></title>
  <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
<!-- Flowbite CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet">

<!-- Flowbite JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    
</head>


<body class="bg-white text-gray-800">
 <header class="fixed top-0 left-0 w-full bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4 py-3" x-data="{ mobileOpen: false }">
      <div class="flex justify-between items-center">
        <!-- Logo -->
        <div class="text-xl font-bold text-blue-600">

          <img src="<?=base_url('images/Awrange-Logo-Orange-SVG.svg')?>"  >
        </div>
        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8 mx-auto text-center sticky top-0">
         
          <a href="<?= base_url('Main_home') ?>" class="text-gray-800 hover:text-blue-600 font-medium">Home</a>
          <a href="<?= base_url('about_us') ?>" class="text-gray-800 hover:text-blue-600 font-medium">About Us</a>

          <!-- Dropdown -->

 <?php
$uri = service('uri');
$firstSegment = $uri->getSegment(1);
$basePath = (isset($validLocations) && in_array($firstSegment, $validLocations)) ? $firstSegment . '/' : '';

// Group products by parent_id
$grouped = [];
foreach ($products as $product) {
    $grouped[(int)$product['parent_id']][] = $product;
}
?>

<!-- Wrapper -->
<div class="relative" id="productDropdownWrapper">
  <!-- Main Trigger Button -->
  <button id="mainToggleBtn" class="flex items-center text-gray-800 hover:text-blue-600 font-medium">
    Our Products
    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>
  </button>

   <!-- Dropdown Menu -->
  <div id="productDropdown" class="absolute top-full left-0 mt-2 w-64 bg-white border rounded-md shadow-lg hidden z-50">

    <!-- Dynamic Submenu: Industrial Transmission Gear -->
    <div class="relative group">
      <div class="flex items-center justify-between px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
        Industrial Transmission Gear
        <svg class="ml-2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </div>
      <div class="absolute top-0 left-full mt-0 ml-1 w-56 bg-white border rounded-md shadow-lg hidden group-hover:block z-50">
        <ul>
          <?php if (isset($grouped[1])): ?>
            <?php foreach ($grouped[1] as $item): ?>
              <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                <a href="<?= base_url($basePath . $item['slug']) ?>" class="block w-full h-full">
                  <?= esc($item['title']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li class="px-4 py-2 text-gray-400 italic">No items found</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>

    <!-- Dynamic Submenu: Industrial Screw -->
    <div class="relative group">
      <div class="flex items-center justify-between px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
        Industrial Screw
        <svg class="ml-2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </div>
      <div class="absolute top-0 left-full mt-0 ml-1 w-56 bg-white border rounded-md shadow-lg hidden group-hover:block z-50">
        <ul>
          <?php if (isset($grouped[3])): ?>
            <?php foreach ($grouped[3] as $item): ?>
              <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                <a href="<?= base_url($basePath . $item['slug']) ?>" class="block w-full h-full">
                  <?= esc($item['title']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          <?php else: ?>
            <li class="px-4 py-2 text-gray-400 italic">No items found</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>

    <!-- Static Items -->
    <div class="px-4 py-2 hover:bg-gray-100 text-gray-700 cursor-pointer">Mechanical Seal</div>
    <div class="px-4 py-2 hover:bg-gray-100 text-gray-700 cursor-pointer">Industrial Transmission Chain</div>

    <!-- Static Submenu: Industrial Gear Box -->
    <div class="relative group">
      <div class="flex items-center justify-between px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
        Industrial Gear Box
        <svg class="ml-2 w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </div>
      <div class="absolute top-0 left-full mt-0 ml-1 w-56 bg-white border rounded-md shadow-lg hidden group-hover:block z-50">
        <ul>
          <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Warm Reduction GearBox</li>
          <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Helical GearBox</li>
        </ul>
      </div>
    </div>

  </div>
 </div>


          <a href="<?= base_url('machinery') ?>" class="text-gray-800 hover:text-blue-600 font-medium">Infrastructure & Machinery</a>
          <a href="<?= base_url('service') ?>" class="text-gray-800 hover:text-blue-600 font-medium">Induction Hardening Service</a>
          <a href="<?= base_url('clients') ?>"class="text-gray-800 hover:text-blue-600 font-medium">Clients</a>
          <a href="#" class="text-gray-800 hover:text-blue-600 font-medium">Gallery</a>
          <a href="<?= base_url('contact_us') ?>" class="text-gray-800 hover:text-blue-600 font-medium">Contact Us</a>
        </nav>

        <!-- Mobile Toggle Button -->
    <!-- Mobile Toggle Button -->
 <button id="mobile-toggle" class="md:hidden block text-gray-600">
  <!-- Hamburger icon -->
  <svg id="icon-open" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
    viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M4 6h16M4 12h16M4 18h16" />
  </svg>
  <!-- X (close) icon -->
  <svg id="icon-close" class="h-6 w-6 hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
    viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M6 18L18 6M6 6l12 12" />
  </svg>
</button>



      </div>

      <!-- Mobile Menu -->
       
      <div id="mobile-menu" class="md:hidden mt-4 space-y-2 hidden ">
        
        <a href="<?= base_url('Main_home') ?>" class="block px-4 py-2 bg-white rounded hover:bg-gray-100 text-gray-700">Home</a>
        <a href="<?= base_url('about_us') ?>" class="block px-4 py-2 bg-white rounded hover:bg-gray-100 text-gray-700">About Us</a>

<div class="space-y-1">
  <!-- Our Products Toggle -->
  <button id="main-toggle" class="w-full text-left px-4 py-2 bg-white rounded hover:bg-gray-100 text-gray-700 flex justify-between items-center">
    Our Products
    <svg id="main-icon" class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
    </svg>
  </button>

  <!-- Main Dropdown -->
  <div id="main-menu" class="hidden pl-4 mt-2 space-y-1">

    <!-- Nested Submenu Block -->
    <div class="space-y-1">
      <button class="nested-toggle w-full flex justify-between items-center text-left px-4 py-2 bg-white rounded hover:bg-gray-100 text-sm text-gray-700">
        Industrial Transmission Gear
        <svg class="nested-icon h-3 w-3 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
      <!-- <div class="nested-menu hidden pl-4 mt-1 space-y-1">
        <a href="<?= base_url('product') ?>" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Bevel Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Spiral Bevel Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Helical Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Spur Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Hypoid Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Screw Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Herringbone Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Rack and Pinion</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Internal Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Timining Pulley</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Spline Shaft</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Pinion Shaft</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Plastic Gear</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Worm Gear</a>
      </div>
    </div> -->
<?php
$uri = service('uri');
$firstSegment = $uri->getSegment(1); // for /canada or /india

// Optional: Validate if this is a known location from controller
      $basePath = (isset($validLocations) && in_array($firstSegment, $validLocations)) ? $firstSegment . '/' : '';
      ?>
      <?php if (isset($products)): ?>
          <?php foreach ($products as $item): ?>
              <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">
                  <a href="<?= base_url($basePath . '/' . $item['slug']) ?>" class="block w-full h-full">
                      <?= esc($item['title']) ?>
                  </a>
              </li>
          <?php endforeach; ?>
      <?php endif; ?>






    <!-- Another Nested Block -->
    <div class="space-y-1">
      <button class="nested-toggle w-full flex justify-between items-center text-left px-4 py-2 bg-white rounded hover:bg-gray-100 text-sm text-gray-700">
        Industrial Chain Sprocket
        <svg class="nested-icon h-3 w-3 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
      <div class="nested-menu hidden pl-4 mt-1 space-y-1">
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Simplex Sprocket</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Duplex Sprocket</a>
         <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Triplex Sprocket</a>
      </div>
    </div>
     <div class="space-y-1">
      <button class="nested-toggle w-full flex justify-between items-center text-left px-4 py-2 bg-white rounded hover:bg-gray-100 text-sm text-gray-700">
        Industrial Screw
        <svg class="nested-icon h-3 w-3 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
      <div class="nested-menu hidden pl-4 mt-1 space-y-1">
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Conveyor Screw</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Feed Screw</a>
         <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Single Screwt</a>
      </div>
    </div>

    <!-- Normal Item -->
    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded">Mechanical Seal</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded">Industrial Transmission Chain</a>
  <div class="space-y-1">
      <button class="nested-toggle w-full flex justify-between items-center text-left px-4 py-2 bg-white rounded hover:bg-gray-100 text-sm text-gray-700">
        Industrial GearBox
        <svg class="nested-icon h-3 w-3 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
      <div class="nested-menu hidden pl-4 mt-1 space-y-1">
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Warm Reduction</a>
        <a href="#" class="block px-4 py-1 text-xs text-gray-700 hover:bg-gray-100 rounded">Helical GearBox</a>

      </div>
    </div>
  </div>
 </div>


        <a href="<?= base_url('machinery') ?>" class="block px-4 py-2 bg-white rounded hover:bg-gray-100 text-gray-700">Infrastructure & Machinery</a>
        <a href="<?= base_url('service') ?>" class="block px-4 py-2 bg-white rounded hover:bg-gray-100 text-gray-700">Induction Hardening Service</a>
        <a href="<?= base_url('clients') ?>" class="block px-4 py-2 bg-white rounded hover:bg-gray-100 text-gray-700">Clients</a>
        <a href="#" class="block px-4 py-2 bg-white rounded hover:bg-gray-100 text-gray-700">Gallery</a>
        <a href="<?= base_url('contact_us') ?>" class="block px-4 py-2 bg-white rounded hover:bg-gray-100 text-gray-700">Contact Us</a>
      </div>
    </div>
   </header>

    <script>
     document.addEventListener('DOMContentLoaded', function () {
     const mainBtn = document.getElementById('mainToggleBtn');
     const dropdown = document.getElementById('productDropdown');

     mainBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      dropdown.classList.toggle('hidden');
     });

     // Close dropdown when clicking outside
     document.addEventListener('click', function (e) {
      if (!dropdown.contains(e.target) && !mainBtn.contains(e.target)) {
        dropdown.classList.add('hidden');
      }
    });
  });
</script>

<script src="<?= base_url('header.js') ?>"></script>
</body>

</html>
