<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    private $dashboardService;

    public function __construct(DashboardService $dashboardService) {
        $this->dashboardService = $dashboardService;
    }
    /**
     * show admin dashboard
     */
    public function index() {
        $data = $this->dashboardService->index();
        return view('admin.dashboard.index');
    }
}
