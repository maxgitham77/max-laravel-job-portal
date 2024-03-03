<?php

namespace App\Http\Controllers\Frontend\Candidate\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CandidateDashboardController extends Controller
{
    public function index(): View
    {
        return view('frontend.candidate.dashboard.candidate-dashboard');
    }
}
