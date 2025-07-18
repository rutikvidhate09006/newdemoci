<h1 class="text-3xl font-bold"><?= esc($mainProduct['title']) ?></h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
  <?php foreach ($products as $p): ?>
    <div class="border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
      <!-- ✅ Clean URL only using subproduct slug -->
      <a href="<?= base_url($p['slug']) ?>">
        <img src="<?= base_url($p['product_image']) ?>" alt="<?= esc($p['title']) ?>" class="w-full h-48 object-cover">
        <div class="p-4">
          <h2 class="text-lg font-semibold text-gray-800"><?= esc($p['title']) ?></h2>
          <p class="text-gray-600 text-sm mt-1"><?= esc($p['product_dsc']) ?></p>
        </div>
      </a>
    </div>
  <?php endforeach; ?>
</div>
