<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceCategory;

class Service extends Model
{
    use HasFactory;

    /**
     * @return mixed
     */
    public function service_categories()
    {
        return $this->belongsToMany(ServiceCategory::class, 'service_category_service');
    }
}
