<?php

namespace App\Http\Controllers\Frontend\Company\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyDashboardController extends Controller
{
    public function index(): View
    {
        return view('frontend.company.dashboard.company-dashboard');
    }
}
