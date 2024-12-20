<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\JobVacancy;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardHRD() {
        $totalDepartment = Department::count();
        $totalJobVacancy = JobVacancy::count();

        return view('pages.features.hrd.dashboard.dashboard', compact('totalDepartment', 'totalJobVacancy'));
    }
}
