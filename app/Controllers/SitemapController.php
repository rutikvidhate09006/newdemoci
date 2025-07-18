<?php

namespace App\Controllers;

use App\Models\ProductModel; // if you're listing products
use CodeIgniter\Controller;

class SitemapController extends BaseController
{
    

public function html()
{
    $productModel = new ProductModel();

    // Manually define main categories and their IDs
    $mainCategories = [
        'Industrial Transmission Gear' => 1,
        'Industrial Chain Sprocket' => 2,
        'Industrial Screw' => 3,
        'Industrial Coupling' => 4,
        'Idler Roller' => 5,
        'Industrial Gearbox' => 6,
    ];

    // Fetch subproducts grouped by parent_id
    $groupedProducts = [];
    foreach ($mainCategories as $main => $parentId) {
        $groupedProducts[$main] = $productModel->where('parent_id', $parentId)->findAll();
    }

    
    return $this->render('sitemap', [
        'groupedProducts' => $groupedProducts,
        'title'=>'Website Site Map  Aser Engineering Pvt.Ltd'
    ]);
}

}



