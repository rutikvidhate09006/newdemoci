<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\ProductModel;
use App\Models\CountryModel;
use App\Models\StateModel;
/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];
     protected $data = [];
    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = service('session');
        parent::initController($request, $response, $logger);

        // Load product data once and share to all views
        $productModel = new ProductModel();
        $this->data['products'] = $productModel->findAll();

    
    $countryModel = new CountryModel();
    $stateModel = new StateModel();

    $countries = $countryModel->findAll();
    $states = $stateModel->findAll();
    $validLocations = [];

    foreach ($countries as $country) {
        $validLocations[] = strtolower(url_title($country['name']));
    }

    foreach ($states as $state) {
        $validLocations[] = strtolower(url_title($state['name']));
    }

    // This will be available in every view
    $this->data['validLocations'] = $validLocations;



    }

    

    protected function render(string $view, array $data = []): string
   {
      $productModel = new \App\Models\ProductModel();

    // Manually hardcoded categories
    $mainCategories = [
        1 => ['title' => 'Industrial Transmission Gear', 'slug' => 'industrial-transmission-gear'],
        2 => ['title' => 'Industrial Chain Sprocket', 'slug' => 'industrial-chain-sprocket'],
        3 => ['title' => 'Industrial Screw', 'slug' => 'industrial-screw'],
    ];

    // Group subproducts under each parent_id
    $grouped = [];
    foreach ($mainCategories as $parentId => $info) {
        $grouped[$parentId] = $productModel->where('parent_id', $parentId)->findAll();
    }

    $data = array_merge($this->data ?? [], $data);
    $data['mainCategories'] = $mainCategories;
    $data['grouped'] = $grouped;
    $data = array_merge($this->data ?? [], $data); 
      $data['mainProduct'] = $data['mainProduct'] ?? null;
    return view('header', $data)
         . view($view, $data)
         . view('footer', $data);


        //  MainCategory

    
   }
}
