<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard',[

            'totalContacts' => Contact::count(),

            'todayContacts' => Contact::whereDate(
                'created_at',
                today()
            )->count(),

            'websiteProjects' => Contact::where(
                'service',
                'Website Development'
            )->count(),

            'mobileProjects' => Contact::where(
                'service',
                'Mobile App'
            )->count(),

        ]);
    }
}