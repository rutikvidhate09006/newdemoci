<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Models\SectionModel;


class MainHomeController extends BaseController
{
    public function Main_home(): string
    {
        $productModel = new ProductModel();
        $products = $productModel->findAll();

       
        $currentMethod = debug_backtrace()[0]['function']; 

        $visibleSections = $this->getSections($currentMethod); 

   
        return $this->render('m_home', [
            'products' => $products,
            'visibleSections' => $visibleSections,
             'title' => 'Gearbox Manufacture Company'
        ]);
  
    }
    private function getSections(string $pageName): array
    {
        $sectionModel = new SectionModel();
        $sections = $sectionModel
            ->where('page_name', $pageName)
            ->where('is_visible', 1)
            ->findAll();

        return array_column($sections, 'section_key');
    }
}