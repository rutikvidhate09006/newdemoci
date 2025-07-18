
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Countries & Cities</title>
  <link rel="stylesheet" href="<?= base_url('css/output.css') ?>">
</head>
<body>

<!-- Section 1: All Countries -->
<div class="pt-[120px] px-4 max-w-7xl mx-auto">
  <h1 class="text-4xl font-extrabold text-red-600 mb-3 text-center">
    Countries
  </h1>

  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4 mt-6">
    <?php foreach (array_keys($groupedData) as $country): ?>
      <?php $slug = strtolower(url_title($country)); ?>
      <a href="<?= base_url($slug) ?>" class="block bg-gray-100 hover:bg-red-200 hover:shadow-md transition duration-200 text-center py-3 rounded text-gray-800 font-medium shadow-sm cursor-pointer">
        <?= esc($country) ?>
      </a>
    <?php endforeach; ?>
  </div>
</div>

<!-- Section 2: Countries and Their States -->
<div class="max-w-7xl mx-auto mt-16 px-4">
  <?php foreach ($groupedData as $country => $states): ?>
    <div class="mb-10">
      <h3 class="text-2xl font-semibold text-gray-800 mb-4">States of <?= esc($country) ?></h3>
      <div class="flex flex-wrap gap-3">
        <?php foreach ($states as $stateName): ?>
          <?php $stateSlug = strtolower(url_title($stateName)); ?>
          <a href="<?= base_url($stateSlug) ?>" class="bg-gray-200 text-gray-800 px-4 py-2 rounded-full text-sm font-medium shadow hover:bg-red-200 hover:text-white transition">
            <?= esc($stateName) ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>
</div>

</body>
</html>

