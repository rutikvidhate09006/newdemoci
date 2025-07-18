<?php
namespace App\Models;

use CodeIgniter\Model;

class SeoModel extends Model
{
    protected $table = 'seo_settings';
    protected $primaryKey = 'id';
    protected $allowedFields = ['selected_term', 'updated_at'];
    protected $useTimestamps = false;
}