<?php

namespace App\Controllers;
use App\Models\ProductModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class ProductController extends BaseController
{
    public function product(): string
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();

        // Group main and sub products
        $menuProducts = $this->groupProducts($products);

        return $this->render('product', [
            'products' => $products,
            'menuProducts' => $menuProducts, // for dynamic header
              'title' => 'Our Products'
        ]);
    }

    public function show($slug)
    {
        $productModel = new ProductModel();

        $product = $productModel->where('slug', $slug)->first();
        if (!$product) {
            throw PageNotFoundException::forPageNotFound();
        }

        $otherProducts = $productModel->where('slug !=', $slug)->findAll();

        // Group main and sub products
        $menuProducts = $this->groupProducts(array_merge([$product], $otherProducts));

        return $this->render('product', [
            'product' => $product,
            'products' => $otherProducts,
            'menuProducts' => $menuProducts, // for dynamic header
            'title' => $product['title']
        ]);
    }

    // ✅ Private helper function to group products
    private function groupProducts(array $products): array
    {
        $menu = [];

        foreach ($products as $product) {
            if ((int)$product['parent_id'] === 0) {
                // main product
                $menu[$product['id']] = [
                    'title' => $product['title'],
                    'slug' => $product['slug'],
                    'children' => []
                ];
            }
        }

        foreach ($products as $product) {
            if ((int)$product['parent_id'] !== 0 && isset($menu[$product['parent_id']])) {
                $menu[$product['parent_id']]['children'][] = [
                    'title' => $product['title'],
                    'slug' => $product['slug']
                ];
            }
        }

        return $menu;
    }





}
