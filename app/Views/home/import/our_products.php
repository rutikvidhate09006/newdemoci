<div class="max-w-7xl mx-auto px-4 py-12 text-center" style="background-color: #f7f7f7;">
  <h2 class="text-2xl md:text-3xl font-bold text-[#ca2212]">Our Products</h2>
  <p class="text-lg text-gray-700 mb-10 max-w-6xl mx-auto mt-2">
    Browse our top products, crafted for precision and superior performance...
  </p>

 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
  <?php foreach ($products as $product): ?>
    <div class="flex flex-col items-center">
      <div class="relative group overflow-hidden rounded-xl shadow-md w-full min-w-[280px] min-h-[300px]">

        <!-- Display product image from admin project -->
        <img src="http://localhost:8082/<?= esc($product['product_image']) ?>" 
             alt="<?= esc($product['title']) ?>"
             class="absolute inset-0 w-full h-[300px] object-cover transition-transform duration-500 group-hover:scale-105" />

        <!-- Hover Description -->
        <div class="absolute inset-0 bg-black bg-opacity-60 text-white flex flex-col items-center justify-center 
                    translate-y-full group-hover:translate-y-0 transition-transform duration-500 px-4 text-center">
          <p class="text-base"><?= esc($product['product_dsc']) ?></p>
        </div>
      </div>

      <!-- Product title -->
      <h3 class="mt-4 text-xl font-semibold text-red-700">
        <?= esc($product['title']) ?>
      </h3>
    </div>
  <?php endforeach; ?>
</div>

</div>