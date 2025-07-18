<?php

namespace App\Models;
use CodeIgniter\Model;

class SectionModel extends Model
{
  

   protected $table = 'page_sections';
    protected $allowedFields = ['page_name', 'section_key', 'is_visible'];
}
