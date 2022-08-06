<?php

namespace App\Http\Controllers\Saler;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller {
    /**
     * create store
     */
    public function create() {
        $title = 'ساخت فروشگاه';
        $stores = Store::all();
        foreach ($stores as $store) {
            $store->typeText = $store->getTypeText();
        }
        return view('saler.store.create', compact('title', 'stores'));
    }
}
