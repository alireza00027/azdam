<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller {
    public function create() {
        $title = 'خرید فروشگاه';
        return view('user.stores.create', compact('title'));
    }
}
