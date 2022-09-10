<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProductAttributes;
use App\Models\Traits\Relations\ProductRelations;

class product extends Model {

    use ProductAttributes, ProductRelations;

    protected $table = 'product';

    protected $casts = ['created_at'=>'datetime'];

}
