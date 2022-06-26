<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;
    protected $fillable = ['slug', 'title'];

    /**userStore relation */
    public function userStores() {
        return $this->hasMany(UserStore::class, 'category_id');
    }
}
