<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sitemap</title>
  <link href="<?= base_url('css/output.css') ?>" rel="stylesheet">
  <style>
    .tree-line {
      border-left: 2px solid #4B5563; /* gray-600 */
      margin-left: 1rem;
      padding-left: 1rem;
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-800 p-10">
  <div class="max-w-4xl mx-auto mb-10">
    <h1 class="text-3xl font-bold mb-6 text-gray-800">HTML Sitemap</h1>
<h1 class="text-3xl font-bold mb-6 text-gray-800 text-center ">Site Map</h1>
    <ul class="space-y-2 text-base">
      <li>├─ <a href="<?= base_url() ?>" class="hover:underline text-blue-700">Home</a></li>
      <li>├─ <a href="<?= base_url('about_us') ?>" class="hover:underline text-blue-700">About Us</a></li>

      <li>├─ <span class="font-semibold text-gray-800">Our Products</span>
        <ul class="tree-line mt-1 space-y-1">
          <?php foreach ($groupedProducts as $main => $subproducts): ?>
            <li>
              ├─ <span class="font-medium"><?= esc($main) ?></span>
              <ul class="tree-line mt-1 space-y-1">
                <?php foreach ($subproducts as $product): ?>
                  <li>
                    ├─ <a href="<?= base_url( esc($product['slug'])) ?>" class="text-blue-600 hover:underline">
                      <?= esc($product['title']) ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php endforeach; ?>
        </ul>
      </li>

      <li>├─ <a href="<?= base_url('gallery') ?>" class="hover:underline text-blue-700">Gallery</a></li>
      <li>└─ <a href="<?= base_url('contact_us') ?>" class="hover:underline text-blue-700">Contact Us</a></li>
    </ul>
  </div>
</body>
</html>
