<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserStore extends Model {
    use HasFactory;
    protected $fillable = ['user_id', 'store_id', 'category_id', 'paid', 'status', 'is_active', 'product_count', 'doc_image', 'address', 'started_at', 'expired_at'];

    /**
     * category relationship
     */
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
