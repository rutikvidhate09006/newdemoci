<?php

namespace App\Controllers;

use App\Models\CountryModel;
use App\Models\StateModel;
use App\Models\ProductModel;
class CityController extends BaseController
{
    public function cities()
    {
             $countryModel = new CountryModel();
             $stateModel = new StateModel();

             $countries = $countryModel->findAll();
             $states = $stateModel->findAll();

             $groupedData = [];

           foreach ($countries as $country) {
            $groupedData[$country['name']] = [];

            foreach ($states as $state) {
                if ($state['country_id'] == $country['id']) {
                    $groupedData[$country['name']][] = $state['name'];
                }
            }
        }

        return $this->render('city', ['groupedData' => $groupedData,'title'=>'Our Market Area Aser Engineering Pvt.Ltd']);
    
    }


// Slug For country,State And Also product
public function countryOrState($slug)
{
    $countryModel = new CountryModel();
    $stateModel = new StateModel();
    $productModel = new ProductModel();

    // Fetch data
    $countries = $countryModel->findAll();
    $states = $stateModel->findAll();
    $allProducts = $productModel->findAll();

    // Group states under countries (for use in views)
    $groupedData = [];
    foreach ($countries as $country) {
        $groupedData[$country['name']] = [];

        foreach ($states as $state) {
            if ($state['country_id'] == $country['id']) {
                $groupedData[$country['name']][] = $state['name'];
            }
        }
    }


    // ✅ Check if the slug is a product (like "internal-gear")
    $product = $productModel->where('slug', $slug)->first();
    if ($product) {
        // Default location to "India"
        $locationName = 'India';
        $locationType = 'country';

        $otherProducts = $productModel->where('slug !=', $slug)->findAll();
        $allProducts = $productModel->findAll();
        $title = $product['title'];
        $location = ucwords($locationName);


        // +++++

$seoModel = new \App\Models\SeoModel();
$seoTerm = $seoModel->find(1)['selected_term'] ?? 'Manufacturers';

$customTitle = "$title $seoTerm in $location, $title $seoTerm in $location";
$titleL = "Most Trusted $title $seoTerm in $location";
        // ++++
        // ✅ Add full SEO title and subtitle
        // $customTitle = $title . ' Manufacturers in ' . $location . ', ' . $title . ' Exporters in ' . $location;
        // $titleL = 'Most Trusted ' . $title . ' Gear Exporters in ' . $location;

        return $this->render('product', [
            'product' => $product,
            'products' => $otherProducts,
            'allProducts' => $allProducts,
            'locationType' => $locationType,
            'locationName' => $locationName,
            'title' => $customTitle,
            'titleL' => $titleL,
        ]);
    }

    // ✅ Normalize slug for country/state matching
    $normalizedSlug = strtolower($slug);

    foreach ($countries as $country) {
        if ($normalizedSlug === strtolower(url_title($country['name']))) {
            $customTitle = 'Gearbox in ' . $country['name'] . ', Industrial Screw Manufacturers, Exporters ' . $country['name'];
            return $this->render('C_Homepage', [
                'country' => $country,
                'groupedData' => $groupedData,
                'title' => $customTitle,
                'products' => $allProducts,
                'locationSlug' => strtolower(url_title($country['name'])),
            ]);
        }
    }

    foreach ($states as $state) {
        if ($normalizedSlug === strtolower(url_title($state['name']))) {
            $customTitle = 'Gearbox in ' . $state['name'] . ', Industrial Screw Manufacturers, Exporters ' . $state['name'];
            return $this->render('C_Homepage', [
                'state' => $state,
                'title' => $customTitle,
                'products' => $allProducts,
                'locationSlug' => strtolower(url_title($state['name'])),
            ]);
        }
    }

    
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
}

public function productInLocation($locationSlug, $productSlug)
{
    $countryModel = new CountryModel();
    $stateModel = new StateModel();
    $productModel = new ProductModel();

    $locationType = null;
    $locationName = null;

    // Try to find if locationSlug is a country
    $country = $countryModel->where('LOWER(REPLACE(name, " ", "-"))', strtolower($locationSlug))->first();
    if ($country) {
        $locationType = 'country';
        $locationName = $country['name'];
    }

    // If not a country, check state
    if (!$locationType) {
        $state = $stateModel->where('LOWER(REPLACE(name, " ", "-"))', strtolower($locationSlug))->first();
        if ($state) {
            $locationType = 'state';
            $locationName = $state['name']; 
        }
    }

    // If not found, return 404
    if (!$locationType) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Invalid location.');
    }

    // Find the product
    $product = $productModel->where('slug', $productSlug)->first();
    if (!$product) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Product not found.');
    }

    $otherProducts = $productModel->where('slug !=', $productSlug)->findAll();
    $allProducts = $productModel->findAll();
    $titleL = 'Most Trusted ' . $product['title'] . ' Gear Exporters in ' . ucwords($locationName);
    $title = $product['title'];

    $location = ucwords($locationName);
    $customTitle = $title . ' Manufacturers in ' . $location . ', ' . $title . ' Exporters in ' . $location;

    return $this->render('product', [
        'product' => $product,
        'products' => $otherProducts,
        'allProducts' => $allProducts,
        'locationType' => $locationType,
        'locationName' => $locationName,
        'title' => $customTitle,
        'titleL'=>$titleL
    ]);
}

}
