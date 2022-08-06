<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model {
    use HasFactory;
    protected $fillable = ['type', 'period_of_time', 'rent_fee'];

    /**
     * get text of type of store
     */
    public function getTypeText() {
        switch ($this->type) {
            case 'gold':
                return 'طلایی';
                break;
            case 'silver':
                return 'نقره ای';
                break;
            case 'bronze':
                return 'برنزی';
                break;

            default:
                return 'نامشخص';
                break;
        }
    }
}
