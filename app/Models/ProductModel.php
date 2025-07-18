<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products'; // your database table name
    protected $primaryKey = 'id';

protected $allowedFields = ['title', 'product_image', 'product_dsc', 'slug','parent_id','about_product'];
}
