<?php

namespace App\Models;
use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'origin',
        'brand',
        'variety',
        'packing_type',
        'packaging_size',
        'description',
        'price',
        'category',
        'image',
    ];
}