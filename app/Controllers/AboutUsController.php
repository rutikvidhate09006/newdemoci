<?php

namespace App\Controllers;

class AboutUsController extends BaseController
{
 public function about_us(): string
    {
       return $this->render('about_us', ['title' => 'About Us']);
      
    }
}