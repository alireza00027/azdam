<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Services\User\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller {

    protected $storeService;

    public function __construct(StoreService $storeService) {
        $this->storeService = $storeService;
    }

    /**
     * list of stores
     */
    public function index() {
        $title = 'فروشگاه ها';
        $stores = Store::all();
        foreach ($stores as $store) {
            $store->typeText = $store->getTypeText();
        }
        return view('user.stores.index', compact('title', 'stores'));
    }
    public function show($type) {
        $title = 'مشاهده فروشگاه';
        $store = Store::whereType($type)->first();
        return view('user.stores.show', compact('title', 'store'));
    }

    /**
     * return create page
     */
    public function create($type) {
        $title = 'خرید پکیج';
        $user = auth()->user();
        $store = Store::whereType($type)->first();
        return view('user.stores.create', compact('title', 'user', 'store'));
    }
}
