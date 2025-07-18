<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

   public function header(): string
    {
        return view('header');
    }
    //    return $this->render('about_us', ['title' => 'About Us']);

    
   public function service(): string
    {
        return $this->render('induction_hardening_service', ['title' => 'Induction Hardening Service']);
    }

     public function machinery(): string
    {
        return $this->render('infrastructure_and_machinery', ['title' => 'Infrastructure Machinery']);
    }



      public function clients(): string
    {
        return $this->render('clients', ['title' => 'Clients']);
    }
}
